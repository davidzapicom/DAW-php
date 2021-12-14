<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 3</title>

<meta charset='UTF-8' />

</head>

<?php

class Empleado {
  //atributos
  public $nombre;
  public $sueldo;
 
  //metodos

  public function mostrarInfo(){
    $info="nombre: " . $this->nombre . "</br>";
    $info.="sueldo: " . $this->sueldo . " ";

    return $info;
  }

  //constructor
  public function  __construct($nombre, $sueldo){
    $this->nombre = $nombre;
    $this->sueldo = $sueldo;
     echo "Se ha creado el objeto empleado</br>";
  }
  
  //destructor
  public function __destruct(){
    echo "</br>Se ha eliminado el objeto empleado";
  }
}

  //creamos el objeto, y mostramos la info
    $empleado1 = new Empleado('Rosa', 2500);
    echo $empleado1 ->mostrarInfo();

    unset($empleado1);


/*class empleado{

    public $nombre;

    public $sueldo;

    public function __construct(){

        echo 'La clase "', __CLASS__, '" se ha iniciado!<br />';

    }

    public function __destruct(){

        echo 'La clase "', __CLASS__, '" se ha destruido.<br />';

    }

    function set_nombre($nombre) {

        $this->nombre = $nombre;

    }

    function get_nombre() {

        return $this->nombre;

    }

    function set_sueldo($sueldo) {

    $this->sueldo = $sueldo;

    }

    function get_sueldo() {

        return $this->sueldo;

    }

}

$dinero = new empleado();
$dinero -> set_nombre('Rita');
$dinero -> set_sueldo('4500');

$dinero2 = new empleado();
$dinero2 -> set_nombre('Juan');
$dinero2 -> set_sueldo('2000');

echo "Nombre: " . $dinero->get_nombre();
echo "<br>";

if ($dinero->get_sueldo() > 3000 ){

  echo "Te toca pagar impuestos <br>";

}else{

  echo "No tienes que pagar impuestos <br>";

}

echo "Nombre: " . $dinero2->get_nombre();
echo "<br>";

if ($dinero2->get_sueldo() > 3000 ){

  echo "Te toca pagar impuestos <br>";

}else{

  echo "No tienes que pagar impuestos <br>";

}

*/
?>


</body>
</html>