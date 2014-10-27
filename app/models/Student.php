<?php

class Student extends Eloquent implements Robbo\Presenter\PresentableInterface {

	protected $guarded = array();
	protected $table = 'student';

	public function getPresenter(){
		// return new StudentPresenter($this);
	}

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}