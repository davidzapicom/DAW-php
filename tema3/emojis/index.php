<!DOCTYPE html> 
<html> 
  <head> 	
    <title></title> 	
    <style type="text/css"> 		
    img{​
      width: 100px; 			
      height: 100px; 		
    }​

    td{​ 			
      border: black solid 1px; 		
    }​ 	
    </style> 
    </head> 
    <body> 	
    <form action="#" method="POST"> 		
    <?php 		
      session_start(); 		
      $fotos = [
        '<img src="img/img1.png">',
        '<img src="img/img2.png">',
        '<img src="img/img3.png">',
        '<img src="img/img4.png">',
        '<img src="img/img5.png">',
        '<img src="img/img6.png">',
        '<img src="img/img7.png">',
      ]; 		
      
      shuffle($fotos); 		
      
      $_SESSION["fotos"] = $fotos; 		
    ?> 		
    <table style="border: black solid 1px;"> 			
    <tr> 				
    <td> 					
    <?php print($fotos[" random_int(0, 5)"]);?> 				
    </td> 				
    <td> 					
    <?php print($fotos["1"]);?> 				
    </td> 				
    <td> 					
    <?php print($fotos["2"]);?> 				
    </td> 			
    </tr> 			
    <tr> 				
    <td> 					
    <?php print($fotos["3"]);?> 				
    </td> 				
    <td> 					
    <?php print($fotos["4"]);?> 				
    </td> 				
    <td> 					
    <?php print($fotos["5"]);?> 				
    </td> 			
    </tr> 		
    </table> 		
    <br> 		
    <input type="submit" name="boton" value="barajar"> 		
    <p> 			Cara sin pintar: 			<?php print($fotos["6"]);?> 		</p> 	
    </form> 
    </body>
</html>