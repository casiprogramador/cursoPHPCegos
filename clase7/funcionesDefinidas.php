<?php

//Imprimir una cadena
print('Hola Mundo');

//Mayusculas
echo '<br>';
$saludo='soy una cadena';
echo strtoupper($saludo);
//Minusculas
echo '<br>';
$saludoMayucula = 'SOY UNA CADENA';
echo strtolower($saludoMayucula);

//formato de numeros
echo '<br>';
$numero = 3554.12;

echo number_format($numero);

//Manejo de substring
echo '<br>';
$nombre="Marcelo";
$apellido="Choque";
$ci = '6900119';

$nombreUsuario = substr($nombre,0,3);
$apellidoUsuario = substr($apellido,0,3);

$usuario = $nombreUsuario.$apellidoUsuario.$ci;
echo strtoupper($usuario);
