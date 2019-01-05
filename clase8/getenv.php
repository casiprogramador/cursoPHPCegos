<?php

$ip = getenv('REMOTE_ADDR');
echo $ip;
echo '<br>';

$ruta = getenv('path');
echo $ruta;
echo '<br>';

$proxy = getenv('HTTP_PROXY');
echo $proxy; 

//phpinfo();