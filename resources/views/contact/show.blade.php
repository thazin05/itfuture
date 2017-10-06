@extends('layouts.customApp')

@section('title', 'Users contact list')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading"><h2>Create About</h2></div>

    <div class="panel-body">
        <!-- @component('components.who')
        @endcomponent -->
        <table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone No</th>
					<th>Message</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
			@foreach($contacts as $contact)
				<tr>
					<td>{{ $contact->id }}</td>
					<td>{{ $contact->name }}</td>
					<td>{{ $contact->email }}</td>
					<td>{{ $contact->phone }}</td>
					<td>{{ $contact->message }}</td>
					<td>
						{!! Form::open(['method'=>'DELETE', 'route'=>['contact.delete', $contact->id], 'style'=>'display:inline']) !!}

							{!! Form::submit('Delete', array('class'=>'btn btn-danger')) !!}

						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
    </div>
</div>

@endsection
