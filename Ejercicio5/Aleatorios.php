<?php
$n=$_POST["valorn"];
$cantidad=1;
$suma=1;
$total=0;
if($n > 20)
{
echo "JAJAJAJA No pudo Adivinar <br/> ";
echo "Ingrese un numero entre 0 y 20 ";
}
else {
    echo "Estos son $n numeros aleatorio <br />";
    while ($cantidad<=$n)
    {
        $rand=rand(0,20);
        echo "Numero aleatorio $rand <br />";
        $total+=$rand;
        $cantidad++; 
    }
    $suma+=$cantidad;
    echo "La suma de los n&uacute;meros generados es $total <br />";
}









?>