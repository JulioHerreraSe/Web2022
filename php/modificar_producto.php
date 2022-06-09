<?php
	include("config.php");
	include("header.php");

	$id = $_GET['id'];

	$sql="SELECT * FROM productos WHERE id='$id'";
	$query =  mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query)
?>
	<main id="login">
		<div class="container">
	    	<div class="abs-center">
				<form action="actualizar_producto.php" method="post"  class="border p-3 form" id="formulario-login">
					<input type="text" name="id" style="display: none;" value="<?php echo $row['id']?>">
					<h1 class="h3 mb-3 fw-normal" style="text-align: center;">Modificar Cuenta</h1>
					<div class="form-floating">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="<?php echo $row['nombre']?>" required>
						<label for="nombre">Nombre</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="text" name="tipo" id="tipo" placeholder="Tipo" class="form-control" value="<?php echo $row['tipo']?>" required>
						<label for="tipo">Tipo</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control" value="<?php echo $row['descripcion']?>" required>
						<label for="descripcion">Descripción</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="number" ondrop="return false;" onpaste="return false;" name="cantidad" id="cantidad"  class="form-control" placeholder="Cantidad" value="<?php echo $row['cantidad']?>" required>
						<label for="cantidad">Cantidad</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="number" step="0.1" ondrop="return false;" onpaste="return false;" name="precio" id="precio"  class="form-control" placeholder="Precio" value="<?php echo $row['precio']?>" required>
						<label for="precio">Precio</label>
					</div>
					<br>
					<button type="submit" class="w-100 btn btn-lg btn-secondary">modificar producto</button>
				</form>
			</div>
		</div>
	</main>
<?php
	include("footer.php");
?>