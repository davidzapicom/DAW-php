<?php
$db = mysqli_connect("localhost","root","","reg"); 
$sql = "SELECT * FROM reportes2";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
$ruta = '<img src = http://127.0.1.1/uap/uploads/';
$ruta.=$result['url'];
$ruta.='">';
echo $ruta;
echo '<img src="data:url/jpeg;base64,'.base64_encode( $result['url'] ).'"/>';






$ruta = '<img src="http://127.0.1.1/uap/uploads/';
$result=$db->query($sql);

while($row = $result->fetch_array(MYSQLI_ASSOC))
{
    /*Concatenamos el valor fijo a cada valor en la columna url*/
    $img_url=$ruta.$row['url'];

    /*Completamos la cadena*/
    $img_url.='">';

    /*Imprimimos ESTA imagen*/
    echo $img_url;
}





?>