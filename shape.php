<?php
//defining a shape class calc area of rect and circumference of a circle

class Shape{
	//member properties
	var $length = "";
	var $radius = "";
	var $breadth = "";

	//member methods/functions
	function calcCircumference(){
		//computation
		$circum = 2 * M_PI * $this->radius;
		return $circum;
	}

	function calcAreaRectangle(){
		//computation
		$area = $this->length * $this->breadth;
		return $area;
	}
	//setter method
	function setLength($mylength){
		$this->length = $mylength;
	}
	function setRadius($myradius){
		$this->radius = $myradius;
	}
	function setBreadth($mybreadth){
		$this->breadth = $mybreadth;
	}
	// getter method
	function getLength(){
		return $this->length;
	}
	function getBreadth(){
		return $this->breadth;
	}
	function getRadius(){
		return $this->radius;
	}
}


	


?>