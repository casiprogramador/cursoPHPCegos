<?php

$numero1 = 5;
$numero2 = 5;

if($numero1 > $numero2){ //false
    echo $numero1.' es mayor que '.$numero2;
}elseif($numero1 == $numero2){
    echo $numero1.' es igual '.$numero2;
    if($numero1>10){
        echo '<br>';
        echo $numero1.' y es mayor a 10';
    }
}else{
    echo $numero2.' es mayor que '.$numero1;
}

?>