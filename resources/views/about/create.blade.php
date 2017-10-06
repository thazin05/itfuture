@extends('layouts.customApp')

@section('title', 'Create About')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Create About</h2></div>

                <div class="panel-body">
                    <!-- @component('components.who')
                    @endcomponent -->
                    {!! Form::open(['route'=>'About.store', 'method'=>'POST', 'files' => true]) !!}

					{!! Form::label('title', 'Title') !!}
					{!! Form::text('title', null, array('class'=>'form-control')) !!}

					{!! Form::label('body', 'Body') !!}
					{!! Form::textarea('body', null, array('class'=>'form-control')) !!}

					{!! Form::label('image', 'Upload Image') !!}
					{!! Form::file('image') !!}

					<center>{!! Form::submit('Save', array('class'=>'btn btn-success')) !!}</center>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Image</th>
					<th>Title</th>
					<th>Body</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rows as $row)
				<tr>
					<td>{{ $row->id }}</td>
					<td><img src="/img/{{ $row->img }}" width="100px" height="100px"></td>
					<td width="200px">{{ $row->title }}</td>
					<td width="400px">{{ str_limit(($row->body), 150) }}</td>
					<td>
						<a class="btn btn-primary" href="{{ route('About.edit', $row->id) }}">Edit</a>
						
						{!! Form::open(['method'=>'DELETE', 'route'=>['About.destroy', $row->id], 'style'=>'display:inline']) !!}

							{!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}

						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
@endsection
