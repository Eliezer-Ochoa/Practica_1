<?php
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$operacion = $_POST["operacion"];
$resultado = 0;
if ($operacion == "suma"){
	$resultado = $numero1 + $numero2;
  }
  
  else if ($operacion == "restar"){
	$resultado = $numero1 - $numero2;
  }
  
  else if ($operacion == "multiplicacion"){
	$resultado = $numero1 * $numero2;
  }
  
  else
  {
	$resultado = $numero1 / $numero2;
  }
  echo "El resultado es de : " . $resultado;
?>
