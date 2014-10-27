<?php

class Student extends Eloquent implements Robbo\Presenter\PresentableInterface {

	protected $guarded = array();
	protected $table = 'student';
	public static $rules = array(
		'email' => 'required|min:2|email',
		'password' => 'required|min:5',
		'first_name' => 'required|min:3',
		'last_name' => 'required|min:3',
	);

	public function getPresenter(){
		return new StudentPresenter($this);
	}
}