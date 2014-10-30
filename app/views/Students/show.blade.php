@extends('layouts.scaffold')
@section('main')
	<h1>Showing {{ $student->first_name }}</h1>
	<div class="jumbotron text-center">
        <h2>{{ $student->first_name }}</h2>
        <p>
            <strong>Email:</strong> {{ $student->email }}<br>
            <strong>Password:</strong> {{ $student->password }}<br>
            <h6>Created Date: {{ $student->created_at }}</h6>
            <h6>Last Modified: {{ $student->updated_at }}</h6>
        </p>
        <span>
            {{ Form::open(array('route'=>array('students.update', $student->id), 'method'=>'DELETE')) }}
                {{ Form::hidden('id',$student->id) }}
                {{ Form::submit('Delete', array('class'=>'btn_link')) }}
            {{ Form::close() }}
        </span>
    </div>
@endsection