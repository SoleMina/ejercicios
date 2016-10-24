<?php  
$dia = 5;

switch ($dia) {
	case 1:
		echo "es lunes";
		break;
	case 2:
		echo "es martes de dos por uno";
		break;
	case 3:
		echo "es miércoles";
		break;
	case 4:
		echo "es jueves";
		break;
	case 5:
		echo "es viernes  ";
		break;
	default:
		echo "es sab o dom";
		break;
}

/*Determinar si un número dado es negativo, cero o positivo, teniendo en cuenta que los negativos se declaran así: -2;

Determinar con Switch si dado un número, que mes corresponde del año ;D, si da un valor diferente entre 1 y 12, marcar que el valor está fuera de rango.

//este fue mi primer ejercicio realizado por mí


*/
$valor = 13;
switch ($valor) {
	case 1:
		echo "enero";
		break;
	case 2:
		echo "febrero";
		break;
	case 3:
		echo "marzo";
		break;
	case 4:
		echo "abril";
		break;
	case 5:
		echo "mayo";
		break;
	case 6:
		echo "junio";
		break;
	case 7:
		echo "julio";
		break;
	case 8:
		echo "agosto";
		break;
	case 9:
		echo "setiembre";
		break;
	case 10:
		echo "octubre";
		break;
	case 11:
		echo "noviembre";
		break;
	case 12:
		echo "diciembre";
		break;
	default:
		echo "debiste escribir un número entre 1 y 12";
		break;

}

?>