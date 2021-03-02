<?php
session_start();
$guardarNo = array();

if(isset($_POST['nombre']))
{
    if(isset($_SESSION['Nombre'])){
         $guardarNo = $_SESSION['Nombre'];
         $guardarNo[] = $_POST['nombre'];
         $_SESSION['Nombre'] = $guardarNo;
     } 
}
$Ctd = $_SESSION["Nombre"];
foreach($Ctd as $Ct)
{
    echo $Ct."<br>" ;
} 
?>