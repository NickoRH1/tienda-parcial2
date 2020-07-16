<<?php 
require_once "pruebaconexion.php";
$id = $_GET ["id"];
$consulta = "DELETE FROM blog WHERE id_usr = $id";
mysqli_query($mysqli, $consulta);
header("Location: index.php");
 ?>