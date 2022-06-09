<?php
	include("header.php");
?>
	<main id="login" style="margin-bottom: 20px !important;">
		<div class="container">
	    	<div class="abs-center">
				<form action="insert_producto.php" method="post"  class="border p-3 form" id="formulario-login" enctype="multipart/form-data">
					<h1 class="h3 mb-3 fw-normal" style="text-align: center;">Insertar producto</h1>
					<div class="form-floating">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
						<label for="nombre">Nombre</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="text" name="tipo" id="tipo" placeholder="Tipo" class="form-control" required>
						<label for="tipo">Tipo</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control" required>
						<label for="descripcion">Descripcion</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="number" ondrop="return false;" onpaste="return false;" name="cantidad" id="cantidad"  class="form-control" placeholder="Cantidad" required>
						<label for="cantidad">Cantidad</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="number" step="0.1" ondrop="return false;" onpaste="return false;" name="precio" id="precio"  class="form-control" placeholder="Precio" required>
						<label for="precio">Precio</label>
					</div>
					<br>
					<div class="form-control">
						<label for="imagen">Imagen</label>
						<input type="file" name="imagen" id="imagen" class="form-control-file" accept="image/*" required>
					</div>
					<br>
					<button type="submit" class="w-100 btn btn-lg btn-secondary">Insertar producto</button>
				</form>
			</div>
		</div>
	</main>
<?php
	include("footer.php");
?>