<?php
if(isset($_POST["boton"])){
    if(!empty($_POST['btn'])) {
    $idbus = $_POST['idautobus'];

        //leer el fichero JSON
        $data = file_get_contents("https://datos.gijon.es/doc/transporte/busgijontr.json");
        $products = json_decode($data, true);
        
        foreach ($products as $product) {
            echo '<pre>';
            print_r($product);
            echo '</pre>';
        }





        $UTM_ZONE = ;
        $UTMX = 281762, ;
        $UTMY = 4823506, ;

        $latlang = convert($UTM_ZONE, $UTMX, $UTMY);



        //Insertar el mapa
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
        </script>
        
        <script type="text/javascript">
        var myCenter=new google.maps.LatLng(39.46910009461806, -0.39186259999996764);
        
        var marker = new google.maps.Marker({
                position: myCenter
                ,});
        
        window.onload = function() {
                var mapOptions = {
                center: myCenter,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                panControl: false,
                zoomControl: false,
                scaleControl: false,
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            marker.setMap(map);
                };
        </script>
        
        <div id="map_canvas"></div>
        
    } else {
        echo "No has introducido ningún numero de autobus. Retrocede e indica un numero de autobus."
    }
} else {
    ?>
    <form action="#" method="post">
        Nº Autobus: 
        <input type="number" name="idautobus" id="">
        <input type="submit" name="btn" value="MOSTRAR">
    </form>
<?php
}
?>