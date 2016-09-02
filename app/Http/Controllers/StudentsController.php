<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use View;
use Session;

use App\Models\Student;

class StudentsController extends Controller {

	/**
	 * Display a listing of students
	 *
	 * @return Response
	 */
	public function index(){
		$students = Student::all();
		return View::make('students.index', compact('students'))->with('title','List Student');
	}

	/**
	 * Show the form for creating a new student
	 *
	 * @return Response
	 */
	public function create()
{
		return View::make('students.create');
	}

	/**
	 * Store a newly created student in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Student::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$student = Student::create($data);

		Session::flash('message', 'Successfully created '.$student->first_name.' student!');
		Session::flash('alert-class', 'alert-success'); 
		return Redirect::route('students.index');
	}

	/**
	 * Display the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student = Student::findOrFail($id);

		return View::make('students.show', compact('student'));
	}

	/**
	 * Show the form for editing the specified student.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student = Student::find($id);

		return View::make('students.edit', compact('student'));
	}

	/**
	 * Update the specified student in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$student = Student::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Student::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$student->update($data);

		return Redirect::route('students.index')->with('message','The student was update successfully!');
	}

	/**
	 * Remove the specified student from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$student = Student::find($id);
		if(count($student)>0){
			Student::destroy($id);
			Session::flash('message', 'Successfully delete '.$student->name);
			Session::flash('alert-class', 'alert-info'); 
		}
		else{
			Session::flash('message', 'Student '.$student->name.' not found!');
			Session::flash('alert-class', 'alert-danger'); 
		}

		return Redirect::route('students.index');
	}
}
