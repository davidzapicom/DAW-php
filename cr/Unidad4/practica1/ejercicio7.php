<!DOCTYPE html>
<html>
<body>

<head>

<title>Ejercicio 7</title>

<meta charset='UTF-8' />

</head>

<?php
if(isset($_POST['boton'])){
class Opcion {
  private $titulo;
  private $enlace;
  private $colorFondo;

  public function __construct($tit,$enl,$cfon){
    $this->titulo=$tit;
    $this->enlace=$enl;
    $this->colorFondo=$cfon;
  }

  public function graficar(){
    echo '<a style="background-color:'.$this->colorFondo.
         '" href="'.$this->enlace.'">'.$this->titulo.'</a>';
  }
}

class Menu {
  private $opciones=array();
  private $direccion;
  
  public function __construct($dir){
    $this->direccion=$dir;
  }
  
  public function insertar($op){
    $this->opciones[]=$op;
    
  }

  private function graficarHorizontal(){
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
    }
  }

  private function graficarVertical(){
    for($f=0;$f<count($this->opciones);$f++)
    {
      $this->opciones[$f]->graficar();
      echo '<br>';
    }
  }

  public function graficar(){
    if (strtolower($this->direccion)=="horizontal")
      $this->graficarHorizontal();
    else
      if (strtolower($this->direccion)=="vertical")
        $this->graficarVertical();
  }
}

		$menu1=new Menu('horizontal');
		$opcion1=new Opcion('$_POST[titulo1]','$_POST[url1]','$_POST[color1]');
		$menu1->insertar($opcion1);
		$opcion2=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
		$menu1->insertar($opcion2);
		$opcion3=new Opcion('MSN','http://www.msn.com','#C3D9FF');
		$menu1->insertar($opcion3);
		$menu1->graficar();
    
  }else{
?>


  <form method="post" action="ejercicio7.php">
    TITULO DE LA WEB A MOSTRAR <input type="text" name="titulo1"> URL1 A MOSTRAR <input type="text" name="url1"> Color: <input type="color" name="color1" value="#42f445"></br>
    TITULO DE LA WEB A MOSTRAR <input type="text" name="titulo2"> URL1 A MOSTRAR <input type="text" name="url2"> Color: <input type="color" name="color2" value="#294c8e"></br>
    TITULO DE LA WEB A MOSTRAR <input type="text" name="titulo3"> URL1 A MOSTRAR <input type="text" name="url3"> Color: <input type="color" name="color3" value="#ff0000"></br>
    Orientacion:</br>
    <input type="radio" id="hor" value="horizontal"  name="orient"checked>Horizontal</br>
    <input type="radio" id="ver" value="vertical" name="orient">Vertical</br>
    <input type="submit" name="boton" value="generar">
  </form>
  <?php
}
?>



</body>
</html>