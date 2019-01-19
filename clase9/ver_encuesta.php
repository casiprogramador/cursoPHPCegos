<?php

$csvFile = 'respuestas_encuesta.csv';
 
$csv = leerCSV($csvFile);

function leerCSV($csvFile){
    $archivo = fopen($csvFile, 'r');
    while (!feof($archivo) ) {
        $lineas[] = fgetcsv($archivo, 1024);
    }
    fclose($archivo);
    return $lineas;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ver Encuestas</title>
</head>
<body>
<h1>Encuesta Realizadas</h1>
<div class="flex">
<table border="1">

  <?php for($i=0;$i<count($csv)-1;$i++){?>
  <tr>
    <td><?php echo $csv[$i][0]?></td>
    <td><?php echo $csv[$i][1]?></td>
    <td><?php echo $csv[$i][2]?></td>
    <td><?php echo $csv[$i][3]?></td>
    <td><?php echo $csv[$i][4]?></td>
    <td><?php echo $csv[$i][5]?></td>
  </tr>
  <?php }?>
</table>
</div>
<a href="encuesta.php" style="display:block;text-align:center">Nueva Encuesta</a>
</body>
</html>