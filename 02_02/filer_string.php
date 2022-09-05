<?php
$string = "<h1>Hola mundo</h1>";
$nuevaString = filter_var($string, FILTER_SANITIZE_STRING);
echo $nuevaString;
?>