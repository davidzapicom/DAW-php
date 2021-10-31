<!DOCTYPE html>
<html lang="es">
  <head>
    <meta  charset="utf-8" >
    <style>
      form{
        padding: 15pX;
        margin: 10px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <?php
    if(isset($_POST['boton'])){
    ?>
     <div  style="display:inline;">
    <form method="POST">
       <?php
       $total=$_POST['total'];
       for($i=1; $i <= $total; $i++) { 
        echo "$i";
       ?>
            <input maxlength="4" type="numero" name="<?php echo "Caja$i"?>">
            <br/>   <br/>
      <?php
    }
     ?>
         <input value="Res" type="submit" name="bot" />

    </form>
      </div>
       <?php
    }
    elseif(isset($_POST['bot'])){
    ?>
         <div  style="display:inline;">
        <form method="POST">
       <?php
         $elementos=count($_POST)-1;
    echo "Tiene ".$elementos." elementos<br><br>";
       $suma=0;
         for ($i=1; $i <= count($_POST)-1; $i++) {
         $valor=$_POST['Caja'.$i]; 
         $suma+=$valor;
        echo "El valor de la caja ".$i." es ".$valor."<br>";
    }
    echo "<br>La suma es ".$suma;
    ?>
    <br><br>
    <form method="POST">
      Cuantos numeros quieres introducir:
      <input maxlength="4" type="numero" value="<?php echo $elementos ?>" name="total" />
  <input value="Pintar" type="submit" name="boton" />
  </form>
  <br>
      <form method="POST">
       <?php
       for($i=1; $i <= $elementos; $i++) { 
        echo "$i";
       ?>
            <input maxlength="4" type="numero" value="<?php echo $_POST['Caja'.$i] ?>" name="<?php echo "Caja$i"?>">
            <br/>   <br/>
      <?php
    }
     ?>
         <input value="Res" type="submit" name="bot" />
    <br/>
    </form>
    </form>
    </div>
       <?php
     }
     else{
     ?>
    <form method="POST">
      Cuantos numeros quieres introducir:
      <input maxlength="4" type="numero" name="total">
       <br/>   <br/>
  <input value="Pintar" type="submit" name="boton" />
  </form>
  <?php
     }
     ?>
  </body>
</html>