<?php

	class Student extends Eloquent implements Robbo\Presenter\PresentableInterface {
		protected $guarded = array();
		public function getPresenter(){
			return new StudentPresenter($this);
		}
	}