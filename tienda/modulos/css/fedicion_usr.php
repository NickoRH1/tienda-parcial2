<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'pruebaconexion.php'; 
	$id = $_GET["id"];
      		$consulta = "SELECT * FROM blog WHERE id_usr = $id";
      		$resultado = mysqli_query($mysqli, $consulta);
      		$fila = mysqli_fetch_array($resultado);
	?>
			<div class="container mt-5">
			<div class="row">
			<div class="col-sm-12">
			<form action="editar_usr.php" method="POST">
			<div class="form-group">


				<label for="nombre">Autor</label>
				<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa tu nombre loco" value="<?php echo $fila['autor_usr']?>">

				<input type="hidden" name="id" class="form-control" id="id" placeholder="Ingresa el id" value="<?php echo $fila['id_usr']?>">
			</div>

			<div class="form-group">
				<label for="nombre">Titulo</label>
				<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresa el titulo" value="<?php echo $fila['titulo_usr']?>">
			</div>	
			<div class="form-group">
				<label for="nombre">Fecha</label>
				<input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha de creacion" value="<?php echo $fila['fecha_usr']?>">
			</div>	
			<div class="form-group">
				<label for="nombre">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Describe al autor" value="<?php echo $fila['descripcion_usr']?>">
			</div>		
			<div class="form-group">
				<input type="submit" value="Registra a tu usuario" class="btn btn-success">
			</div>
			</form>	
			</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	</body>
</html>