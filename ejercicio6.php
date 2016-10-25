<?php

/*Definir un array de 5 elementos y asignar a cada uno de ellos un número. Mediante una estructura condicional, determinar si el promedio de los números son mayores o menores que 6. Mostrar un mensaje por pantalla informando el resultado. */

$a = array(1, 2, 3, 4, 5);
media($a);

function media($a) {
	$sum = 0;
	foreach ($a as $key) {
		$sum = $sum + $key;
	}

	if ($sum/5 >= 8) {
		echo "Superaste el promedio";
	}else {
		echo "No superaste el promedio";
	}
}

?>