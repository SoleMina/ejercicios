<?php

/*Sumar dos arrays*/

$a1 = array(1, 2, 3, 4, 5);
$a2 = array(1, 2, 3, 4, 5);

print_r(sumar($a1, $a2));

function sumar($a1, $a2) {
	$a3 = array();
	for ($i=0; $i <=4; $i++) { 
		$a3[$i] = $a1[$i] + $a2[$i];
	}
	return $a3;
}

?>