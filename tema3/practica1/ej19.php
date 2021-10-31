<?php
    if(isset($_POST['boton'])){
        if(!empty($_POST['radio'])) {
            echo 'Tienes  ' . $_POST['radio'];
        } else {
            echo 'Por favor, debe selecciona un valor.';
        }
    }
?>