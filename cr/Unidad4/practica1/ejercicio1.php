<!DOCTYPE html>
<html>
<body>
<head>
<title>Ejercicio 1</title>
<meta charset='UTF-8' />
</head>
<?php
class racional {
    private $numRacional;
    public function __construct($cadena) {
        $this->numRacional = $cadena;
    }
    public function __toString(){
        return $this->numRacional;
    }
}
	$a=new racional("8/5");
    $b=new racional("6/4");
    
	echo "<br>valor de \$a: $a <br />";
	echo "</br>";
	echo "<br>valor de \$b: $b";
    echo "</br>";
    
	var_dump($b);
?>
</body>
</html>