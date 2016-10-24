<?php
/*Obtener el factorial de un número*/

$n = 5;
$res = factorial($n);
echo $res;
function factorial($num) {
	$f = 1;
	for( $i = 1; $i <= $num; $i++) {
		$f = $f * $i;
	}

	return $f;
}

?>