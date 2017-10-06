@extends('layouts.customApp')

@section('title', 'Update About')

@section('content')
	<div class="row" style="padding-top:25px">
		<div class="col-md-8 col-md-offset-2">
			<h2>Update About</h2>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::model($row, ['method'=>'PATCH', 'route'=>['About.update', $row->id], 'files' => true]) !!}

			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, array('class'=>'form-control')) !!}

			{!! Form::label('body', 'Body') !!}
			{!! Form::textarea('body', null, array('class'=>'form-control')) !!}

			{!! Form::label('image', 'Upload Image') !!}
			{!! Form::file('image') !!}

			{!! Form::submit('Save', array('class'=>'btn btn-success')) !!}
			{!! Form::close() !!}

		</div>
	</div>
	
@endsection