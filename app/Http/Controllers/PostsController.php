<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::where('active', 1)->orderBy('id', 'DESC')->paginate(7);
        $title = 'Latest Post';
        return view('home')->withPosts($posts)->withTitle($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->file('img');
        // $name = time().$file->getClientOriginalName();
        // $file->move('img', $name);
        // $data = array_merge(['img' => "img/{$name}"], $request->all());
        $file = $request->file('img');
        $name = time() . '.' . $file->getClientOriginalName();
        $file->move('img', $name);
        $data = array_merge($request->all(), ['img' => $name]);
        Posts::create($data);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Posts::where('slug',$slug)->first();
        if(!$post)
        {
            return redirect('/')->withErrors('requested page not found');
        }
        $comments = $post->comments;
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = Posts::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Posts::findOrFail($id);

        $post->author_id = $request->input('author_id');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->slug = $request->input('slug');
        $post->active = $request->input('active');

        if($request->file('img'))
        {
            $img = public_path("img/{$post->img}");
            if(File::exists($img))
            {
                unlink($img);
            }
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move('img', $name);
            $post->img = $name;
        }
       $post->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function load($name)
    {
        $path = storage_path().'/public/img/'.$name;
        if(file_exists($path)){
            return Response::download($path);
        }
    }
}
