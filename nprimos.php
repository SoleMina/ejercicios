<?php
$valor = 10;
$primo = 0;
 
    for($i = 1;$i < $valor; $i++){
        if($valor % $i == 0){
            $primo++;
        }
    }
    if($primo >= 2 ){
        echo "No es primo";
    } else {
        echo "Es primo";
    }
?>
 
	