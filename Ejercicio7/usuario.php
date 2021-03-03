<?php 

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$sexo = $_POST["sexo"];


 class Persona { 
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;
    public $sexo;
  

    function __construct($nombre, $apellido, $edad, $direccion, $sexo)
    {
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this-> edad = $edad;
        $this-> direccion = $direccion;
        $this-> sexo = $sexo;

    }
    function __get($propiedad)
    {
        if (property_exists($this, $propiedad))
        return $this ->$propiedad;
    }

    function __set($propiedad, $valor)
    {
        if (property_exists($this, $propiedad))
        return $this ->$propiedad  = $valor;
    }
 }
 //$persona = new persona ("nombre", "apellidos", "edad" "direccion", "sexo");
 //$suma+=$cantidad;
 echo "Persona  Agregada : " .$nombre,"<br/> Apellido : " .$apellido, "<br/> Edad : " .$edad, "<br/> Direccion : " .$direccion, "<br/>Sexo : " .$sexo;
 

?>

