@extends('layouts.app')
@section('title', 'About Us')
@section('header')
    @foreach($abouts as $about)
    <header class="intro-header" style="background-image: url({{ asset('/img/' .$about->img)  }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                    <h1>{{ $title }}</h1>
                    <hr class="small">
                    <span class="subheading">{{ $description }}</span>
                </div>
                </div>
            </div>
        </div>
    </header>
    @endforeach
@section('header')

@section('content')

	@foreach($abouts as $about)
		<h2>{{ $about->title }}</h2>
		<p>{{ $about->body }}</p>
	@endforeach
	
@endsection