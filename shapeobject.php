<?php

include('shape.php');
// to create new shape object
$shapeobject = new Shape;
//to set new values for properties
//->calls method and function
$shapeobject->setLength(9);
$shapeobject->setBreadth(10);
$shapeobject->setRadius(2.5);

echo $shapeobject->getRadius()."<br>";
echo $shapeobject->radius. "<br>";

echo "circumference =". $shapeobject->calcCircumference();

$areaobject = new Shape;
$areaobject->setLength(9);
$areaobject->setBreadth(10);

echo "<br>Area = ". $areaobject->calcAreaRectangle();
?>