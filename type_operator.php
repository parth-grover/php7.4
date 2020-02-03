<?php

/*
	Typed Operator
	
	// Before php 7.4
	
	Not able to define type hinting in class 
	

*/

class abc {
	public int $id;
	public string $name;
	
}

$abc = new abc;
$abc->id = 'cdsv';   ///  this will through an error
$abc->name = ['ccdsvdsv'];   ///  this will through an error

echo $name;





?>