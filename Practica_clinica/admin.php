<?php
session_start();
   if (isset($_SESSION["tipo"]) == "admin"){
   $servername = "localhost";
	$username = "admin";
	$password = "admin";
	$dbname = "consultas";

	$conn = mysqli_connect($servername, $username, $password,$dbname);

	if (!$conn){
	 die("Connection failed: " . mysqli_connect_error());
	} 

?>

<form method="post" style="background-image: url('https://image.freepik.com/vector-gratis/mano-dibujada-medicina-patrones-fisuras-doddle-bosquejo-salud-antecedentes-medicos_7586-1191.jpg'); height: 600px; text-align: center; width: 600px;">
	<button style= "background-color: silver; width: 200px; padding: 1%; height: 70px; margin-bottom: 8px; margin-top: 25%;" type="submit" name="bt1" formaction="altapaciente.php" > Alta Paciente </button> <br>
	<button style= "background-color: silver; width: 200px; padding: 1%;height: 70px; margin-bottom: 8px;" type="submit" name="bt2" formaction="altamedico.php">Alta Médico </button><br>
	<button style= "background-color: silver; width: 200px; padding: 1%;height: 70px; margin-bottom: 8px;" type="submit" name="bt3" formaction="cierresesion.php"> Cerrar Sesión </button>
</form>


<?php
}
?>