@extends('layouts.scaffold')
@section('main')
	<h1>Create Student</h1>
	<!-- <small>{{ link_to_route('students.index', 'Home') }}</small> -->

	{!! Form::open(array('route'=>'students.store', 'class'=>'form-horizontal')) !!}
		{!! Form::textField('email') !!}
		{!! Form::passwordField('password') !!}
		{!! Form::textField('first_name') !!}
		{!! Form::textField('last_name') !!}
		{!! Form::submit('Create', array('class'=>'col-sm-offset-2 btn btn-primary')) !!}
	{!! Form::close() !!}

	<!-- @include('common.student_errors') -->
@endsection