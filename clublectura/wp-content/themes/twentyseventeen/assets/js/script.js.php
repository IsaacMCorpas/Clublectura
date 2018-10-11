<?php
//Definicion del tipo de archivo
header('Content-type','application/javascript');

//Recuperamos la variable de WordPress a enviar
$varHome = isset($_GET['varHome'])?$_GET['varHome']:null;

//Codigo adcional PHP
?>

alert("<?= $varHome ?>");
//Codigo javascript adicional
