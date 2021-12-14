
<?php  

$edad=$_POST['edad'];

switch ($edad) {
	
   case "infante":
   
        echo "Menos de 14 años: Aun ere muy pequeño";
        break;
		
   case "adolescente":
   
        echo "Entre 15 y 20 años: todavía eres muy joven";
        break;
		
   case "joven":
   
        echo "De 21 a 40 años: eres una persona joven";
        break;
		
   case "madura":
   
        echo "Entre 41 y 60 años: eres una persona madura";
        break;
		
   case "mayor":
   
        echo "Más de 60 años: Ya eres una persona mayor";
        break;
		
   default:
   
        echo "Aún no me has dicho tu edad";  
   }
?>
