<?php

class Student extends Eloquent implements Robbo\Presenter\PresentableInterface {

	protected $guarded = array();
	protected $table = 'student';

	public function getPresenter(){
		return new StudentPresenter($this);
	}
}