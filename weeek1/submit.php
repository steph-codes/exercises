<?php

$name =strip_tags($_POST['fullname']);
$gen = $_POST['gender'];

//echo "Thankyou $name, for registering, you chose, ";
//empty($name)

if(empty(trim($name)) && empty(trim($gen))){
	echo"please fill inputs";
}elseif($gen == ""){
	echo"please select gender";
}elseif($name==""){
	echo"please enter your name";
}else{
	echo"thank you $name, for registering, you chose <b>$gen</b>";
}

//echo $_GET['fullname'];
// keep in a var $user = $_GET['user'];
?>