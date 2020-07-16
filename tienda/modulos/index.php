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
<div>

	<h1 align="center">RH 
	</h1>

</div>
	<?php require_once 'pruebaconexion.php'; ?>
		<div class="container mt-4">
	<div >

		<table>
			<div class="col-sm-12">
		<a href="formulario_usr.php" class="btn btn-primary float-right mb-4">Carrito</a>	
		</div>	
		
		
			<?php 
     		 $consulta = "SELECT * FROM articulos";
     		 $resultado = mysqli_query($mysqli, $consulta);
    	 	 while($fila = mysqli_fetch_array($resultado)){
     		 
     		 ?>



<div>
<div class="card" style="width: 58rem;" >
  <img class="card-img-top" src="img/1504.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 align="center" ><?php echo $fila
				["nombre_art"];
			?></h4>
	</div>
	<div>	
    <p class="card-text" align="center"></p>
  </div>
  <ul class="list-group list-group-flush" align="center">
    <li class="list-group-item"><?php echo $fila
				["descripcion_art"];
			?></li>
    <li class="list-group-item"><?php echo $fila
				["categoria_id"];
			?></li>
    <li class="list-group-item"><b><?php echo $fila
				["precio_art"];
			?></b></li>
  </ul>
  <div class="card-body">
  	<div>
    <a href="fedicion_usr.php?id=<?php echo $fila['id_usr']; ?>" class="btn btn-primary float-left mb-4">Comprar</a>
</div>
<div align="right">
    <a href="eliminar_usr.php?id=<?php echo $fila['id_usr']; ?>" class="btn btn-warning">Agregar al carrito</a>
  </div>
</div>
</div>



     	<!--	 <div>
     		 <TD>
					<IMG SRC="img/rh.png" width=400px height=200px></IMG>

					</TD>
			<tr align=center>
			<th ><?php echo $fila
				["nombre_art"];
			?></th>
			</tr>
			</tbody>
			<tbody >

<!--<TR><TD><A HREF="index.html">Página principal </A></TD></TR> -->

<!--

<tr align=center>
			<td><?php echo $fila
				["descripcion_art"];
			?></td>
			</tr>
</tbody>
<tbody>
	<tr align=center>
			<td><?php echo $fila
				["categoria_id"];
			?></td>
		</tr>
</tbody>
<tbody>	
<tr align=center>		
			<th><?php echo $fila
				["precio_art"];
			?></th>
			</tr>
</tbody>	
</div>		
			 <td align=center><a href="fedicion_usr.php?id=<?php echo $fila['id_usr']; ?>" class="btn btn-primary float-left mb-4">Comprar</a>&nbsp;
			 <a href="eliminar_usr.php?id=<?php echo $fila['id_usr']; ?>" class="btn btn-warning">Agregar al carrito</a>
			</td>
    		  </tr> -->

	     	 <?php }  ?>

			</tbody>
			</table>
			</div>
			</div>
			</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	</body>
</html>