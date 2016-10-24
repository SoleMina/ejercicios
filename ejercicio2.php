<?php 
/*
Obtener el promedio o media aritmética de 5 números.
*/

$numeros =  array(1, 2, 3, 4, 5);

$media =  media($numeros);

echo $media;

function media($num) {
	$n = 0;
	foreach ($num as $key) {
		$n = $n + $key;
	}
	$n = $n/5;

	return $n;
};

?>