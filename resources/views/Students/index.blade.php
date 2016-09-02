@extends('layouts.scaffold')
@section('main')
	<h1>All Student</h1>
	@if ($students->count())
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Email</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Postcode</th>
					<th>No. Phone</th>
					<th>Avatar</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($students as $stud)
					<tr>
						<td><a href="{{URL::route('students.show', $stud->id)}}">{{{ $stud->email }}}</a></td>
						<td>{!! $stud->first_name !!}</td>
						<td>{!! $stud->last_name !!}</td>
						<td>{!! $stud->postcode !!}</td>
						<td>{!! $stud->no_phone !!}</td>
						<td class="center"><img src="{{ Gravatar::src($stud->email,40) }}"></td>
						<td class="center"><a href="{!! URL::route('students.edit', $stud->id) !!}"><i class="glyphicon glyphicon-pencil"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		There are no students
	@endif

	@if (Session::has('message'))
		<div class="alert {{ Session::get('alert-class', 'alert-info') }}">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{!! Session::get('message') !!}
		</div>
	@endif
	<p>{{ link_to_route('students.create', 'Add new students') }}</p>
@endsection