<?php
/*$host = "localhost";
$user = "root";
$clave = "";
$bd  = "eliezer";
$conectar = mysqli_connect($host,$user,$clave,$bd);
$conectar = new PDO('mysql:host=localhost;dbname=eliezer','root','');*/
$db = new PDO('mysql:host=127.0.0.1;dbname=web','root',''); 
$db->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $edad = $_POST['edad'];
 $sexo = $_POST['sexo'];
 $direccion = $_POST['direccion'];

$query = <<<SQL
INSERT INTO personas (Nombre,Apellido,Edad,Sexo,Direccion)
VALUES (:Nombre,:Apellido,:Edad,:Sexo,:Direccion)
SQL;
$statement = $db->prepare($query);
$params = [
    'Nombre' => $nombre,
    'Apellido' => $apellido,
    'Edad' => $edad,
    'Sexo' => $sexo,
    'Direccion' => $direccion,
];
$statement->execute($params);
if($statement){
   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";
}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}
?>