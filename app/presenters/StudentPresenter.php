<?php

class StudentPresenter extends BasePresenter{
	public function presentAvatar(){
		return "<img src=\"http://gravitar.com/{$this->email}\">";
	}
}
