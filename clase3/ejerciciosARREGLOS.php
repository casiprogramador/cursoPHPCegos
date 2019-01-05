<?php
/* 
$estudiantesPhp = array('Humberto','Sergio','Guadalupe','Rodrigo');

echo 'Los alumnos del fondo son '.count($estudiantesPhp);
echo '<br>';
//echo $estudiantesPhp[2];

for($i=0; $i< count($estudiantesPhp); $i++){
    echo 'Hola '.$estudiantesPhp[$i];
    echo '<br>';
} */

/* $estudiantesPhpTodos = array(
    array('Humberto','Sergio','Guadalupe','Rodrigo'),
    array('Jose','Carlos','Pablo'),
);
//echo -> string
//print_r() -> arreglos


//print_r($estudiantesPhpTodos);
print_r($estudiantesPhpTodos[0][3]); */

// ARREGLOS SECUENCIALES
/* 
$estudiantesPhp = array('Jose'=>95,'Carlos'=>91,'Pablo'=>80);

foreach($estudiantesPhp as $nombre=>$nota){
    echo $nombre.' tiene '.$nota.' puntos';
    echo '<br>';
} */

/* $estudiantesPhp = array('Jose'=>95,'Carlos'=>91,'Pablo'=>80);

$estudiante = array_search(95,$estudiantesPhp);
echo $estudiante */;


/* $estudiantesPhp = array('Humberto','Sergio','Guadalupe','Rodrigo');
echo implode("--",$estudiantesPhp); */

$nombre = 'Marcelo';
$notas = array(90,80,100,70,80);

// 1 parcial tiene 90 pts
// 2 parcial tiene 80 pts

$suma=0;
for($i=0;$i<count($notas);$i++ ){
    echo $nombre.' el '.($i+1).' parcial tiene '.$notas[$i];
    echo '<br>';
    $suma=$suma+$notas[$i];
}

$promedio = $suma/count($notas);

echo $nombre.' su promedio es '. $promedio;