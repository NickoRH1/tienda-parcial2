<?php
<?php
    $usuario = "root";
    $password = "";
    $database = "usuarios";
    $server = "localhost";
    $mysqli = mysqli_connect($server, $usuario, $password, $database);
  session_start();


<?php 
         $consulta = "SELECT * FROM usuarios";
         $resultado = mysqli_query($mysqli, $consulta);
         while($fila = mysqli_fetch_array($resultado)){
         
         
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['nombre_usr'];
  $password = $_POST['password_usr'];
  
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($email == '' && $password == ''){
	// Guardo en la sesión el email del usuario.
	$_SESSION['email'] = $email;
	
	// Redirecciono al usuario a la página principal del sitio.
	header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php"); 
  }else{
	echo 'El email o password es incorrecto, <a href="index2.html">vuelva a intenarlo</a>.<br/>';
  }

?>