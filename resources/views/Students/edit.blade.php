@extends('layouts.scaffold')
@section('main')
	<h1>Editing {{ $student->first_name }}</h1>

	{{ Form::open(array('route'=>array('students.update', $student->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}
		{{ Form::textField('email', "Email", $student->email) }}
		{{-- Form::passwordField('password', "Passwords", $student->password) --}}
		{{ Form::textField('password', "Passwords", $student->password) }}
		{{ Form::textField('first_name', "First Name", $student->first_name) }}
		{{ Form::textField('last_name', "Last Name", $student->last_name) }}

	{{-- Form::open(array('route'=>array('students.update', $student->id),'method' => 'PUT')) --}}
		<!-- <p> -->
			{{-- Form::label('email', 'Email:') --}}<br>
            {{-- Form::text('email', $student->email) --}}<br>
		<!-- </p>
		<p> -->
			{{-- Form::label('password', 'Password:') --}}<br>
            {{-- Form::text('password', $student->password) --}}<br>
		<!-- </p>
		<p> -->
			{{-- Form::label('first_name', 'First Name:') --}}<br>
            {{-- Form::text('first_name', $student->first_name) --}}<br>
		<!-- </p>
		<p> -->
			{{-- Form::label('last_name', 'Last Name:') --}}
            {{-- Form::text('last_name', $student->last_name) --}}
		<!-- </p> -->

		{{ Form::hidden('id',$student->id) }}
		<!-- <p> -->{{-- Form::submit('Update Author') --}}<!-- </p> -->
		{{ Form::submit('Update', array('class'=>'col-sm-offset-2 btn btn-primary')) }}
	{{ Form::close() }}
	<!-- @include('common.student_errors') -->
@stop