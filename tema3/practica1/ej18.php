<?php
$var = 0;

if (isset($var))
  echo 'La variable está definida';

if (empty($var))
  echo 'La variable está definida pero está vacía';


if (isset($_POST['$var1']) && !empty($_POST['$var1']) && (isset($_POST['$var2']) && !empty($_POST['$var2']))) {
    echo "<pre>";
    print_r($_POST);


        require_once "conexion.php";
            require_once "buscar.php";
}
?>