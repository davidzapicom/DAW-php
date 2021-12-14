<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 2</title>

<meta charset='UTF-8' />

</head>

<?php

class Empleado {
  private $nombre;
  private $sueldo;
 
  public function asigna($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function pagaImpuestos()
  {
    echo $this->nombre;
    echo ' - ';
    if ($this->sueldo>3000)
      echo 'Te toca pagar impuestos';
    else
      echo 'No tienes que pagar impuestos';
    echo '<br>';
  }
}
 
    $empleado1=new Empleado();
    $empleado1->asigna('Rita',2500);
    $empleado1->pagaImpuestos();
    var_dump($empleado1);
    echo "</br>";
    $empleado1=new Empleado();
    $empleado1->asigna('Juan',4500);
    $empleado1->pagaImpuestos();
    var_dump($empleado1);
    echo "</br>";


/*class empleado{

    public $nombre;

    public $sueldo;

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