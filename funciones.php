<?php

/*

* Funciones de Php:
* Manejo de sesiones
* Post y get
* Sistema de archivos
* Directorios
* Cookies
* Fecha y hora
* Cadenas
* Matemáticas

*/

function operaciones($n, $m, $operaciones) {
	if ($operaciones == "suma") {
		return $n + $m;
	}
	if ($operaciones == "resta") {
		return $n - $m;
	}
	if ($operaciones == "multiplicacion") {
		return $n * $m;
	}
	if ($operaciones == "division") {
		return $n / $m;
	}
}

echo operaciones(3, 4, "multiplicacion");



?>