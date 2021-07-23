<?php

	

class Report{
	//member properties
	var $model="";
	var $name ="";
	var $operatingSystem ="";
	
	//member methods/functions
	function displayReport(){
		$model =$this->name.  $this->model.   $this->operatingSystem ;
		return $model;
	}
	//setter method
	function setModel($mymodel){
		$this->model = $mymodel;
	}
	function setName($myname){
		$this->name = $myname;
	}
	function setOs($myos){
		$this->operatingSystem =$myos;
	}
	// getter method
	function getModel(){
		return $this->model ;
	}
	function getName(){
		return $this->name;
	}
	function getOs(){
		return $this->operatingSystem;
	}
}
?>