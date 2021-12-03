<?php
$target_dir="uploads/";
echo "Vamos a proceder a la subida en $target_dir <br>";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
echo "La ruta de subida es $target_file <br>";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo "La extensión del fichero es $imageFileType <br>";
//valida si el fichero es una imagen o una imagen falsa

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    var_dump($check);
    echo "El fichero se ha guardado temporalmente en".$_FILES["fileToUpload"]["tmp_name"]."<br>";
    if($check !== false) {
        echo "El fichero es una imagen - " .$check["mime"]. ".<br>";
        $uploadOk = 1;
    } else {
        echo "El fichero no es una imagen. <br>";
        $uploadOk = 0;
    }
}

// Comprobar si el fichero existe
if (file_exists($target_file)) {
    echo "El fichero ya existe.<br>";
    $uploadOk = 0;
}

// comprobar el tamaño del fichero 
if ($_FILES["fileToUpload"]["size"] > 300000) {
    echo "El fichero es demasiado grande.<br>";
    $uploadOk = 0;
}

// Permitir solo estas extensiones
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Unicamente se puede subir ficheros JPG, JPEG, PNG & GIF.<br>";
    $uploadOk = 0;
}

// Subimos el fichero si es correcto
if ($uploadOk == 0) {
    echo "El fichero no se ha podido subir.<br>";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "El fichero  " .basename( $_FILES["fileToUpload"]["name"]). " se ha subido correctamente.<br>";
    } else {
        echo "Se ha producido un error subiendo el fichero .<br>";
    }
}
?>