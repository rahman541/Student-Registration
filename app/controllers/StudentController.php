<?php

	class StudentController extends BaseController{
		public function __construct(Student $student){
			$this->student = $student;
		}
		public function index(){
			$student = $this->student->all();
			return View::make('student.index', compact('student'));
		}
	}