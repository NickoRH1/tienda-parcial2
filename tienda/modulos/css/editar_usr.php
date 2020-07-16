<<?php 
require_once 'pruebaconexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];

$consulta = " UPDATE blog SET autor_usr = '$nombre', titulo_usr = '$titulo', fecha_usr ='$fecha', descripcion_usr = '$descripcion' WHERE id_usr = '$id' ";

mysqli_query($mysqli, $consulta);
header("Location: index.php");

 ?>