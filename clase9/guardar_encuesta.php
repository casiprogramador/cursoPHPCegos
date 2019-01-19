<?php 
$nombre_archivo = "respuestas_encuesta.csv";
// open the file "demosaved.csv" for writing

if (file_exists($nombre_archivo)) {
    //echo "El fichero $nombre_archivo existe";
    $file = fopen('respuestas_encuesta.csv', 'a');
} else {
    //echo "El fichero $nombre_archivo no existe";
    $file = fopen('respuestas_encuesta.csv', 'w');
    fputcsv($file, ['Nombre','¿Que framework utilizas para trabajar?', '¿Trabajas bajo un estandar de codigo?', '¿Que base de datos utilizas mas?', '¿Que sistema operativo usas mas?','¿Que control de versiones utilizas?']);
}
    
    // Sample data. This can be fetched from mysql too
    $respuestas = [$_POST['nombre'],$_POST['herramienta'],$_POST['estandar'],$_POST['base_datos'],$_POST['sistema'],$_POST['control_versiones']];

    fputcsv($file, $respuestas);
    
    // Close the file
    fclose($file);
?>

<h1 style="text-align:center;">Gracias por llenar la encuesta</h1>
<a href="ver_encuesta.php" style="display:block;text-align:center">Ver Encuestas</a>