<?php
 /*
 este
 es
 un
 saludo
 */

/*  $mensaje = "Hello word";
 $num1 = 1;
 $num2 = 2;
 $estado = false;
 if($estado){
     echo 'Activado';
 }else{
     echo 'No activado';
 } */
/* $numero = 5;
  echo $numero--;
  echo '<br/>';
  echo $numero;
 */

/*  $numero = 10;
 $estado = false;
  if($numero != 0 || $estado == true){
    echo 'EL NUMERO ES CERO';
  }else{
    echo 'EL NUMERO NO ES CERO';
  } */

//http://localhost/cursophp/clase1/holamundo.php?nombre=Pablo&&apellido=Choque
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  echo "Mi nombre es $nombre $apellido";
  //varones 65
  //mujeres 60
  //
  //http://localhost/cursophp/clase1/holamundo.php?nombre=Pablo&&genero=hombre&&edad=50

  // La persona Sr Pablo se puede jubilar
  // La persona Carla no se puede jubilar
?>
