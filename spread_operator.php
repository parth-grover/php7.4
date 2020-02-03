<?php
/*

	--- Alternate of array_merge ---
	
	$array1 = ['app1','app2','app3'];
	$array2 = ['app4','app5','app6'];
	$arraytest = array_merge($array1,$array2);

*/
$array1 = ['app1','app2','app3'];

$array2 = ['app4','app5','app6'];

$array3 = [...$array1,...$array2];

function arraymerge(){
	return ['app7','app8','app9'];
}

$array4 = [...arraymerge(),...$array3];


echo '<pre>';

var_dump($array4);
?>