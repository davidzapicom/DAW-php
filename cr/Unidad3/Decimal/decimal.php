<!DOCTYPE html>
<html>
<body>

<head>

<title>Binario a decimal</title>

<meta charset='UTF-8' />

</head>

<?php

session_start();

$random = array(rand(0,1) , rand(0,1), rand(0,1), rand(0,1), rand(0,1) );

$_SESSION["random"] = $random;

//echo(rand(0,1));  $_SESSION[$i]  echo " $_SESSION[random][$i] ";

echo "<strong>El numero en binario: </strong>";

/*for ($i = 0; $i < 4; $i++) {

    echo " $random[$i] ";

  }

echo "<br/><br/>";*/

foreach ($_SESSION["random"] as $lista => $numeros) {

    echo "$numeros ";

}

echo "<br/><br/>";

$contador = 0;

// -----------------------------------------------------------------------

if ($_SESSION["random"][0] == 1 ){

   echo '<img src="imagenes/5.png" alt="5" width="60" height="70">' ;

   $contador = $contador + 16;

}else{

    echo '<img src="imagenes/0.png" alt="0" width="60" height="70">' ;

}

// -----------------------------------------------------------------------

if ($_SESSION["random"][1] == 1 ){

    echo '<img src="imagenes/4.png" alt="4" width="60" height="70">' ;

    $contador = $contador + 8;
 
 }else{
 
     echo '<img src="imagenes/0.png" alt="0" width="60" height="70">' ;
 
}

// -----------------------------------------------------------------------

if ($_SESSION["random"][2] == 1 ){

    echo '<img src="imagenes/3.png" alt="3" width="60" height="70">' ;

    //$contador = $contador + 4;
 
 }else{
 
     echo '<img src="imagenes/0.png" alt="0" width="60" height="70">' ;
 
}

// -----------------------------------------------------------------------

if ($_SESSION["random"][3] == 1 ){

    echo '<img src="imagenes/2.png" alt="2" width="60" height="70">' ;

    $contador = $contador + 2;
 
 }else{
 
     echo '<img src="imagenes/0.png" alt="0" width="60" height="70">' ;
 
}

// -----------------------------------------------------------------------

if ($_SESSION["random"][4] == 1 ){

    echo '<img src="imagenes/1.png" alt="1" width="60" height="70">' ;

    $contador = $contador + 1;
 
 }else{
 
     echo '<img src="imagenes/0.png" alt="0" width="60" height="70">' ;
 
}

// -----------------------------------------------------------------------

$_SESSION["contador"] = $contador;
 
?>

<br/><br/>

<form action="comprobacion.php" method="post">
		
	Numero decimal: <input name="respuesta" type="text" required/> &nbsp
			
	<input type="submit" value="Comprobar" name="comprobar"/>

</form>


</body>
</html>