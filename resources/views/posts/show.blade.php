@extends('layouts.app')

@section('header')
	 <header class="intro-header" style="background-image: url({{ asset('/img/' .$post->img)  }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                   <!-- <h1>{{ $post->title }}</h1>
                    <hr class="small"> -->
                    <span class="subheading">{{ $post->description }}</span>
                    <span class="meta">
						{{ $post->created_at->format('M d, Y \a\t h:i a') }} By
						<a href="{{ url('/user/'.$post->author_id) }}">{{ $post->author->name }}</a>
					</span>
                </div>
                </div>
            </div>
        </div>
    </header>
	<!-- <div class="post-heading">
		<h1>{{ $post->title }}</h1>
		<h2 class="subheading">{{ $post->description }}</h2>
		<span class="meta">
			{{ $post->created_at->format('M d, Y \a\t h:i a') }} By
			<a href="{{ url('/user/'.$post->author_id) }}">{{ $post->author->name }}</a>
		</span>
	</div> -->
@endsection


@section('content')
	@if($message = Session::get('message'))
		<div class="alert alert-success">
			{{ $message }}
		</div>
	@endif
	@if($post)
		<div class="">
			<h3>{!! $post->title !!}</h3>
			{!! $post->body !!}
		</div>
		@if(Auth::guest())
		<p>Please Login to Comment</p>
		@else
			<div class="">
				<h3>Leave a comment</h3>
			</div>
			<div class="panel-body">
				<form class="" action="/comment/add" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="on_post" value="{{ $post->id }}">
					<input type="hidden" name="slug" value="{{ $post->slug }}">
					<div class="form-group">
						<textarea required="required" placeholder="Enter comment here" name="body" rows="8" cols="40" class="form-control"></textarea>
					</div>
					<input type="submit" name="post_comment" class="btn btn-success" value="Post">
				</form>
			</div>
		@endif
		<div class="">
			@if($comments)
				<ul style="list-style: none; padding: 0">
					@foreach($comments as $comment)
					<li class="panel-body">
						<div class="list-group">
							<div class="list-group-item">
								<h3>{{ $comment->author->name }}</h3>
								<p>{{ $comment->created_at->format('M d, Y \a\t h:i a') }}</p>
							</div>
							<div class="list-group-item">
								<p>
									{{ $comment->body }}
								</p>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			@endif
		</div>
		@else
			//404 error
	@endif	

@endsection