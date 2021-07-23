<?php

	

class Report{
	//member properties
	var $model="";
	var $name ="";
	var $operatingSystem ="";
	// add constant
	const PHONE = "from slot";

	function __construct($name, $model, $operatingSystem ){
		$this->model = $model;
		$this->name = $name;
		$this->operatingSystem = $operatingSystem;
	}
	
	//member methods/functions
	function displayReport(){
		$result ="i bought a new phone ". $this->name .  $this->model .  $this->operatingSystem .self::PHONE;
		return $result;
	}
	
}
$newconst = new Report("samsung","s20","android 10");
echo $newconst->displayReport();
?>