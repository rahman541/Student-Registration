<?php
	class StudentPresenter extends BasePresenter{
		public function presentAvatar(){
			$email = trim($this->email);
			$email = strtolower( $email );
			$email = md5($email);
			$link = "http://www.gravatar.com/avatar/".$email;
			return "<a href=\"$link\"><img src=\"$link\"></a>";
		}
	}
