<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tiendaRH</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'pruebaconexion.php'; ?>
			<div class="container mt-5">
			<div class="row">
			<div class="col-sm-12">
			<form action="inserta_usr.php" method="POST">
			<div class="form-group">
				<label for="nombre">Autor</label>
				<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresa tu nombre loco">
			</div>
			<div class="form-group">
				<label for="nombre">Titulo</label>
				<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresa el titulo">
			</div>	
			<div class="form-group">
				<label for="nombre">Fecha</label>
				<input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha de creacion">
			</div>	
			<div class="form-group">
				<label for="nombre">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Describe al autor">
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