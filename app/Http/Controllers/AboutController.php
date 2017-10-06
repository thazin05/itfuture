<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Http\Controllers\Controller;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = About::all();
        return view('about.create', compact('rows'));
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
        $file = $request->file('image');
        $name = time().$file->getClientOriginalName();
        $file->move('img', $name);

        $data = array_merge(['img' => $name], $request->all());
        About::create($data);
        return redirect()->route('About.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = About::find($id);
        return view('about.edit',compact('row'));
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
        $about = About::findOrFail($id);

        $about->title = $request->input('title');
        $about->body = $request->input('body');

        if($request->file('image'))
        {
            $img = public_path("img/{$about->img}");
            if(File::exists($img))
            {
                unlink($img);
            }
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move('img', $name);
            $about->img = $name;
        }
        // if($request->file('image'))
        // {
        //     $file = $request->file('image');
        //     $name = time().$file->getClientOriginalName();
        //     $file->move('img', $name);
        //     $about->img = $name;
        // }
        $about->save();
        return redirect()->route('About.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect()->route('About.index');
    }
}
