<?php

class Client{

	var $email;
	var $message;
	var $conn;

	function __construct(){
		$this->conn = new mysqli('localhost', 'root','', 'demoapp');
	}
	function post($em, $msg){
		$this->conn->query("INSERT INTO posts SET client_email='$em', client_msg='$msg'");
	}
}
?>