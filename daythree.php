<?php

//instantiation
class Student{

	public $matricNo;
	public $fullname;

	function __construct($number, $studentName){
		$this->matricNo=$number;
		$this->fullname =$studentName;
	}
	function displaymat(){
		echo $this->matricNo;
	}
	function displayful(){
		echo $this->fullname;
	}
	function login(){
		echo "You have succesfully logged in";
	}
	function logout(){
		echo"You Logged out";
	}
	function resetPassword(){
		echo "Password Changed <br>";
		$this->logout();

	}
	function getMatricNo(){
		echo $this->matricNo;
	}
}
//instantiate or create a handler.
//constructor accept list of argument, echo$->$fullname /dis
$shw = new Student(2345, "shola byles");
$shw->displaymat();
$shw->displayful();
?>