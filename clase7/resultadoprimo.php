<?php

$numero = $_POST['numero'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];
if(!empty($numero)){
    
    if($operacion == 'primo'){
        esPrimo($numero);
    }elseif($operacion == 'par'){
        parImpar($numero);
    }elseif($operacion == 'potencia'){
        potencia($numero,$numero2);
    }else{
        echo 'Seleccione una operacion';
    }

    //esPrimo($numero2);

}else{
    echo 'Ingrese un numero';
}

function esPrimo($numero){
    $esPrimo = true;
    for($i=2;$i<$numero;$i++){
        if($numero % $i == 0){
            $esPrimo = false;
        }
    }
    if($esPrimo){
        echo 'El numero '.$numero.' es primo'; 
    }else{
        echo 'El numero '.$numero.' no es primo';
    }
    echo '<br>';
}


function potencia($numero,$potencia){
    $resultado = 1;
    for($i = 1; $i<= $potencia; $i++){
        $resultado=$resultado*$numero;
    }
    echo $numero.' elevado a '.$potencia.' es '.$resultado;
}

function parImpar($numero){
    if($numero % 2 == 0){
        echo 'El numero '.$numero.' es par';
    }else{
        echo 'El numero '.$numero.' es impar';
    }
}

?>
<br>
<a href="numeroprimo.php">Atras</a>

