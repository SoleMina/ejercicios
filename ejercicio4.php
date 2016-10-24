<?php
/*Hacer un array de 10 elementos enteros e imprimir el mayor y menor*/

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

num($array);

function num($array) {
	$mayor = 0;
	$menor = 0;
	foreach ($array as $key) {
		if($mayor < $key) {
			$mayor = $key;
		}
		if($menor > $key) {
			$menor = $key;
		}
	}

	echo "El mayor es: ". $mayor."</br>";
	echo "El menor es: ".$menor;
}




?>