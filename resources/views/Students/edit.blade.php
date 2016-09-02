@extends('layouts.scaffold')
@section('main')
	<h1>Editing {!! $student->first_name !!}</h1>

	{!! Form::open(array('route'=>array('students.update', $student->id), 'method' => 'PUT', 'class'=>'form-horizontal')) !!}
		{!! Form::textField('email', "Email", $student->email) !!}
		{!! Form::textField('password', "Passwords", $student->password) !!}
		{!! Form::textField('first_name', "First Name", $student->first_name) !!}
		{!! Form::textField('last_name', "Last Name", $student->last_name) !!}

		{!! Form::hidden('id',$student->id) !!}
		{!! Form::submit('Update', array('class'=>'col-sm-offset-2 btn btn-primary')) !!}
	{!! Form::close() !!}
@stop