3<?php
session_start();

class User{
	var $username;
	var $password;
	var $conn;
	
	function __construct(){
		$this->conn = new mysqli('localhost', 'root', '', 'demoapp');
	}
	function details($username){
		$q = "SELECT user_name,user_date,user_id FROM usertable WHERE user_name ='$username'";

		$res = $this->conn->query($q);

		$result = $res->fetch_row();
		return $result;

		//fetch_assoc(); fetch_array();
		//fetching one use session.. to fetch if fetching more than one use fetch array
		return $result;
	}
	function report(){
		$q = "SELECT * FROM usertable ";
		$res = $this->conn->query($q);
		$display = $res->fetch_array();


		// to fetch records in a loop, otherwise fetch with their index. no need to use while
		echo"<table class='table'>";
		while($display = $res->fetch_array()){
		/*echo"<pre>";
		print_r($display);
		echo"</pre>";*/

		//fetch_row gives 0,1,2
		$u = $display['user_name'];
		$p = $display['user_pass'];

		echo"<tr><td>$u</td><td>$p</td></tr>";

		}
		echo"</table>";
	}

	
	function login($fn, $p){

		$q ="SELECT * FROM usertable WHERE user_name='$fn' AND user_pass='$p'";
		$res = $this->conn->query($q);

		$total = $res->num_rows;

		if($total >0 ){
			$_SESSION['login']=$fn ;
			//header("location:meeting.php");
		}else{
			//header("location:dayfour_login.php");
		}
		/*if($fn=="ogundele" && $p=="tunde"){
			$_SESSION['login'] = $fn;
			header("location:meeting.php");
		}else{
			header("location:dayfour_login.php");
		}*/
		
	}
 	function logout(){
		session_destroy();
		session_unset();
		header("location:dayfour_login.php");
	}
	function retrievepass(){
		echo"";
	}
	function register($u,$p){
		
		$newdata = $u . $p;
		$this->conn = new mysqli('localhost', 'root', '', 'demoapp');

		$chk = $this->conn->query("INSERT INTO usertable SET user_name='$u', user_pass='$p'");
		//echo $conn->connect_error  /connection error, while error is for general error;
		$this->conn->query("INSERT INTO usertable SET user_name ='$u', user_pass='$p'");
		/*if($chk){
			echo "good";
		}else{
			echo this->conn->error;
		}*/
		
	}
	//new mysqli('server','dbusername', 'dbpassword', 'dbname');
		/*file_put_contents('customer.txt', $newdata ,FILE_APPEND);
		echo"Username is $u and password is $p they have been saved into the database";
		//$data = $this->username . $this->password;*/
}

?>