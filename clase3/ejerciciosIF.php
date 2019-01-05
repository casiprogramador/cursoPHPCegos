<?php

$nombre = 'Marcelo';
$salario = 15000;
$empleado = 'publico';
$billeteraMovil = false;

if($salario > 15000){
    echo $nombre.'No recibira doble aguinaldo';
}else{

    echo $nombre.' recibira doble aguinaldo';

}

// $salario < 15000
// Marcelo recibira doble aguinaldo
// Si es empleado publico
// ---> y le pagaran $sueldo*0.15 
// Si no es empleado publico
// ---> y le pagaran $sueldo 

// $salario - ($salario*0.15)
// $salario*0.85