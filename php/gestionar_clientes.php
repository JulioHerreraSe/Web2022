<?php
	include("config.php");
	include("header.php");

	$sql="SELECT * FROM clientes";
	$query =  mysqli_query($con,$sql);
?>
	<main style="margin-top: 120px;">
		<div class="container" style="margin: 100px">
			<table class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>email</th>
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
							<th><?php echo $row['email']?></th>
							<th><a href="modificar_cliente.php?id=<?php echo $row['id']?>">Editar</a></th>
							<th><a onclick="return confirm('¿Confirma eliminación del usuario <?php echo $row['nombre']?>?')" href="borrar_cliente.php?id=<?php echo $row['id']?>">Eliminar</a></th>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<div class="container" style="margin-bottom: 40px;">
			<a href="http://localhost/Web2022/php/nuevo_cliente.php"><button class="w-100  btn btn-lg btn-secondary">Insertar cliente</button></a>
		</div>
		</div>
	</main>
	
<?php
	include("footer.php");
?>