<<?php 
require_once 'pruebaconexion.php';
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$consulta = "INSERT INTO blog (autor_usr, titulo_usr, fecha_usr, descripcion_usr) VALUES ('$nombre', '$titulo', '$fecha', '$descripcion')";

mysqli_query($mysqli, $consulta);
header("Location: index.php")

 ?>