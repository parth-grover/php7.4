<?php
/*

	--- Arrow function 2 ---
	
	$multiply = function($n) use($number){
		return $n* $number;
	};

*/
$number = 20;

$multiply = fn($n) => $n * $number;

echo $multiply(5);

?>