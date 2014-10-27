<?php
	class StudentPresenter extends BasePresenter{
		public function presentAvatar(){
			$email = trim($this->email);
			$email = strtolower( $email );
			$email = md5($email);
			return "<img src=\"http://www.gravatar.com/avatar/$email\">";
		}
	}
