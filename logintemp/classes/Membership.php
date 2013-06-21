<?php

require 'Mysql.php';

class Membership {
	
	function validate_User($un, $pwd) {
		$mysql = new Mysql();
		$ensure_credentials = $mysql->verify_Username_and_Pass($un, md5($pwd));
		
		if($ensure_credentials) {
			$_SESSION['status'] = 'authorized';
			header("location: index.php");
		
		} else return "Please enter correct username and password";
	}


}