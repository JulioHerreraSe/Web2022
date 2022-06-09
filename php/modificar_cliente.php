<?php
	include("config.php");
	include("header.php");

	$id = $_GET['id'];

	$sql="SELECT * FROM clientes WHERE id='$id'";
	$query =  mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query)
?>
	<main id="login">
		<div class="container">
	    	<div class="abs-center">
				<form action="actualizar_cliente.php" method="post"  class="border p-3 form" id="formulario-login">
					<input type="text" name="id" style="display: none;" value="<?php echo $row['id']?>">
					<h1 class="h3 mb-3 fw-normal" style="text-align: center;">Modificar Cuenta</h1>
					<div class="form-floating">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="<?php echo $row['nombre']?>" required>
						<label for="nombre">Nombre</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $row['email']?>" required>
						<label for="email">Email</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control" value="<?php echo $row['password']?>" required>
						<label for="password">Contraseña</label>
					</div>
					<br>
					<button type="submit" class="w-100 btn btn-lg btn-secondary">modificar cuenta</button>
				</form>
			</div>
		</div>
	</main>
<?php
	include("footer.php");
?>