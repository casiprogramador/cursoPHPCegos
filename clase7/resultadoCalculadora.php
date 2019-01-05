<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

echo 'La '.$operacion.' de '.$numero1.' y '.$numero2.' es '.calcular($numero1,$numero2,$operacion); 

function calcular($numero1,$numero2,$operacion){
    $resultado = 0;
    if($operacion == 'suma'){
        $resultado = $numero1+$numero2;
    }elseif($operacion == 'resta'){
        $resultado = $numero1-$numero2;
    }elseif($operacion == 'multiplicacion'){
        $resultado = $numero1*$numero2;
    }elseif($operacion == 'division'){
        
        if($numero2 == 0){
            $resultado = 'Indefinido';
        }else{
            $resultado = $numero1/$numero2;
        }
    }else{
        $resultado = 0;
    }
    return $resultado;
}