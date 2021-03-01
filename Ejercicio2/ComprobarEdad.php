<?php


$nombre = $_GET["nombre"];
//$correo = $_POST["correo"];
$fec = $_GET["fecha"];

$anio_acatual = strftime("%Y");

$a = $fec[0];
$b = $fec[1];
$c = $fec[2];
$d = $fec[3];
$total = $a.$b.$c.$d;

if(($anio_acatual-$total) > 18) 
{
    
    echo "Bienvdenido a nuestra web ".$nombre;
    
}
else{
    echo "No puedes acceder, eres menor de edad";
}
?>