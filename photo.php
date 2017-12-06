<?php

require 'config_function.php';

$conexion = conexion('galeria', 'root', 'root');
if(!$conexion){
    header('Location: error.php');
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: index.php');

}
$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

if(!$foto){
    header('Location: index.php');
}


require 'views/photo.view.php';

?>