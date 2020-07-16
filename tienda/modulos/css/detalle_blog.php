<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<!--LUIS REQUENA-->
<body>
<div class="table-reponsive">
	<?php require_once 'pruebaconexion.php'; ?>
	<table	class="table table-stripped">
		<thead>
			<tr>
				<th>
					ID
				</th>
				<th>
					Autor
				</th>
				<th>
					Titulo
				</th>
				<th>
					Fecha
				</th>
				<th>
					Descripcion
				</th>
				<th>
					Status
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
      		$id = $_GET['id'];
      		$consulta = "SELECT * FROM blog WHERE id_usr = $id";
      		$resultado = mysqli_query($mysqli, $consulta);
      		$fila = mysqli_fetch_array($resultado);
      		?>
			<tr>
			<td><?php echo $fila
				["id_usr"];
			?></td>
			<td><?php echo $fila
				["autor_usr"];
			?></td>
			<td><?php echo $fila
				["titulo_usr"];
			?></td>
			<td><?php echo $fila
				["fecha_usr"];
			?></td>
			<td><?php echo $fila
				["descripcion_usr"];
			?></td>
			<td><?php echo $fila
				["status_usr"];
			?></td>
			<td><a href="index.php">Regresar a la tabla principal</a></td>
			 </tr>
			 </tbody>
   			 </table>
   			 </div>
   			 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	</body>
</html>