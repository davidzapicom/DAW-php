<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['boton1'])){
    ?>
        <form action="#" method="POST">
		<fieldset>
			<label>Asignatura
				<input type="text" name="asig">
            </label>
            <button type="submit" name="boton1" value="MOSTRAR NOTAS">MOSTRAR NOTAS</button>
           <button type="submit" name="boton2" value="CERRAR SESION">CERRAR SESION</button>
        </fieldset>
    </form>
    <?php
            session_start();
            $asignatura = $_POST['asig'];
            $enlace = mysqli_connect("localhost","root","","cifp");
            $consulta = mysqli_query($enlace, 'SELECT alumno,fecha,nota FROM notas WHERE asignatura="'.$asignatura.'"');
            $sql = mysqli_query($enlace, 'SELECT ROUND(AVG(nota),2), MIN(nota), MAX(nota), COUNT(alumno) FROM notas WHERE asignatura="'.$asignatura.'"');
            $media = mysqli_query($enlace, 'SELECT asignatura, ROUND(AVG(nota),2) FROM notas GROUP BY asignatura');
            if(mysqli_num_rows($consulta) == 0){
                    echo "La asignatura ".$asignatura." no esta en la base de datos cifp";
                    echo "<br/>";
                }
                else{
                    echo "Resultados asignatura ".$asignatura;
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Fecha</th>";
                            echo "<th>Nota</th>";
                        echo "</tr>";
                    while($datos = mysqli_fetch_array($consulta)){
                        echo "<tr>";
                            echo "<td>".$datos['alumno']."</td>";
                            echo "<td>".$datos['fecha']."</td>";
                            echo "<td>".$datos['nota']."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br/><br/>";
                    while($datos2 = mysqli_fetch_array($sql)){
                        echo "La nota media es ".$datos2['ROUND(AVG(nota),2)'];
                        echo "<br/><br/>";
                        echo "La nota mas baja es ".$datos2['MIN(nota)'];
                        echo "<br/><br/>";
                        echo "La nota mas alta media es ".$datos2['MAX(nota)'];
                        echo "<br/><br/>";
                        echo "El total de alumnos es ".$datos2['COUNT(alumno)'];
                    }
                    echo "<br/><br/>";
                    echo "Graficas de medias";
                    echo "<table>";
                   
                    while($datos3 = mysqli_fetch_array($media)){
                        echo "<tr>";
                            echo "<th>".$datos3['asignatura']."</th>";
                            echo '<td><svg version="1.1" xmlns="http://www.w3.org/2000/svg"';
                                echo 'width="'.($datos3['ROUND(AVG(nota),2)']*20).'" height="50">';
                                echo '<line x1="0" y1="25" x2="'.($datos3['ROUND(AVG(nota),2)']*20).'" y2="25" stroke="hsl(200, 100%, 50%)" stroke-width="50" />';
                            echo '</svg></td>';
                            echo "<td>".$datos3['ROUND(AVG(nota),2)']."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br/><br/>";
                    
                }
            }
        else if (isset($_POST['boton2'])){
            session_destroy();
            header("Location:inicio.php");
        }

        else{
    ?>

    <form action="#" method="POST">
		<fieldset>
			<label>Asignatura
				<input type="text" name="asig">
            </label>
            <button type="submit" name="boton1" value="MOSTRAR NOTAS">MOSTRAR NOTAS</button>
           <button type="submit" name="boton2" value="CERRAR SESION">CERRAR SESION</button>
        </fieldset>
    </form>
        <?php
        }
    ?>
</body>
</html>