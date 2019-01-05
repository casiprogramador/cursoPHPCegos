<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ciudad = $_POST['ciudad'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];

echo $nombre.' '.$apellido.' es de '.$ciudad;
echo '<br>';
echo $descripcion;
echo '<br>';
print_r($estado);

