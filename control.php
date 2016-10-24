<?php
/*

if(10 > 8) {
	echo "es verdad";
}else{
	echo "es falso";
}
*/

//ejemplo con if:

/*Dada una edad, saber si es bebé, niño o adolescente.
bebe < 2,
niño 3 - 12,
adolescente 13 - 17,
adulto 18
*/
/* Ejemplo de edades
$edad = 20;
if ($edad <= 2) {
	echo "qué bonito bebé. De adulto es que bonito bebe.";
}elseif ($edad <= 12) {
	echo "es niño";
}elseif ($edad <= 17) {
	echo "es un adolescente";
}else{
	echo "es un adulto";
}
*/
//ejemplo de valor de un producto:

$valor = 30;

if ($valor <= 10) {
	echo "oh, es barato";
}else{
	echo "qué caro es!";
}


//temperatura - grados: 

$valor = 10;


if($valor < 0) {
	echo "grado bajo cero";
}elseif ($valor == 0) {
	echo "el grado es cero";
}elseif ($valor <= 10 && $valor > 0) {
	echo "hace frío ";
}elseif ($valor <= 15 && $valor > 10) {
	echo "el clima es cálido";
}elseif ($valor > 15) {
	echo "hace calor!";
}else{
	echo "intenta de nuevo ";
}

//costo de posibilidad para comprar un objeto:

$dinero = 10001;

if($dinero < 1 && $dinero > 0) {
	echo "puedes comprarte unos caramelos";
}elseif ($dinero <= 50 && $dinero > 1) {
    echo "puedes comprarte un polo";
}elseif ($dinero <= 200 && $dinero > 50){
	echo "puedes ir a gamarra a comprarte unas cuantas prendas";
}elseif ($dinero <=500 && $dinero > 200) {
	echo "puedes ir a Saga a comprarte ropa o algún aparato de costo promedio";
}elseif ($dinero <= 10000 && $dinero > 500) {
	echo "puedes comprarte una tv de 50 pulgadas y algo más";
}elseif ($dinero > 10000) {
	echo "eres rico";
}else{
	echo "eres pobre";
}

//Determinar si un número dado es negativo, cero o positivo, teniendo en cuenta que los negativos se declaran así: -2;
//este fue mi primer ejercicio realizado por mí

$numero = -7;

if($numero < 0) {
	echo "  es un número negativo";
}elseif($numero == 0) {
	echo "  el número es cero";
}elseif($numero > 0) {
	echo "  es un número positivo";
}else {
	echo "  no es número";
}

?>
