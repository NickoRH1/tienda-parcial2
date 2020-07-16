<!--LUIS REQUENA-->
<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container mt-4">
	<div class="table-reponsive">
		<table	class="table table-stripped">
	<div class="col-sm-12">
	<a href="" class="btn btn-primary float-right mb-4">Nuevo</a>	
	</div>	


	<div>
		<TABLE BORDER=2>
<TR><TD><IMG SRC="imagenes/babe.gif"></TD></TR>
</TABLE>
<TABLE BORDER=2>
<TR><TD><A HREF="index.html">Página principal </A></TD></TR>
</TABLE>
</div>



</table>

		<thead>
			<tr>
				<th>
					autor
				</th>
				<th>
					titulo
				</th>
				<th>
					fecha
				</th>
				<th>
					descripcion
				</th>
			</tr>
		</thead>
		<!--<tbody>
			<?php 
     		 $consulta = "SELECT * FROM blog";
     		 $resultado = mysqli_query($mysqli, $consulta);
    	 	 while($fila = mysqli_fetch_array($resultado)){
     		 ?>
			<tr>
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
			 <td><a href="fedicion_usr.php?id=<?php echo $fila['id_usr']; ?>">Editar</a>
			 <a href="eliminar_usr.php?id=<?php echo $fila['id_usr']; ?>">Eliminar</a>
			</td>
    		  </tr>
	     	 <?php }  ?>

			</tbody>
			</table>
			</div>
			</div>
			</div>
			</div> -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	</body>
</html>