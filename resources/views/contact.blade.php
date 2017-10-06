@extends('layouts.app')

@section('title', 'IT FUTURE Contact')

@section('header')
    <header class="intro-header" style="background-image: url({{ asset('img/1502431475.lake.jpeg')  }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                    <h1>Contact</h1>
                    <hr class="small">
                    <span class="subheading">Keep in touch with us</span>
                </div>
                </div>
            </div>
        </div>
    </header>
 @endsection

@section('content')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-md-offset-2" style="padding-top: 20px">
			@if($message = Session::get('message'))
				<div class="alert alert-success">
					{{ $message }}
				</div>
			@endif
			<h2>Contact with Us</h2>

			{!! Form::open(['route'=>'Contact.store', 'method'=>'POST']) !!}

				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', null, array('class'=>'form-control')) !!}

				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', null, array('class'=>'form-control')) !!}

				{!! Form::label('phone', 'Phone') !!}
				{!! Form::text('phone', null, array('class'=>'form-control')) !!}

				{!! Form::label('message', 'Message') !!}
				{!! Form::textarea('message', null, array('class'=>'form-control')) !!}

				<br/>

				{!! Form::submit('Send', array('class'=>'btn btn-primary')) !!}

			{!! Form::close() !!}
		</div>
	</div>
@endsection