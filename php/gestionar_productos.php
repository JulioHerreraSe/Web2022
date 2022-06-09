<?php
	include("config.php");
	include("header.php");

	$sql="SELECT * FROM productos";
	$query =  mysqli_query($con,$sql);
?>
	<main id="login" style="margin-bottom: 20px !important;">
		<div class="container">
			<table class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Descripción</th>
						<th>cantidad</th>
						<th>precio</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						while ($row=mysqli_fetch_array($query)) {
					?>
						<tr>
							<th><?php echo $row['nombre']?></th>
							<th><?php echo $row['tipo']?></th>
							<th><?php echo $row['descripcion']?></th>
							<th><?php echo $row['cantidad']?></th>
							<th><?php echo $row['precio']?>€</th>
							<th><a href="modificar_producto.php?id=<?php echo $row['id']?>">Editar</a></th>
							<th><a onclick="return confirm('¿Confirma eliminación del producto <?php echo $row['nombre']?>?')" href="borrar_productos.php?id=<?php echo $row['id']?>">Eliminar</a></th>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</main>
	<div class="container" style="margin-bottom: 40px;">
			<a href="http://localhost/Web2022/php/crear_productos.php"><button class="w-100  btn btn-lg btn-secondary">Insertar producto</button></a>
		</div>
<?php
	include("footer.php");
?>