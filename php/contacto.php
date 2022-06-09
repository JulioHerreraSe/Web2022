<?php
	include("header.php");
?>
	<main id="login" style="margin-bottom: 20px !important;">
		<div class="container">
	    	<div class="abs-center">
				<form action="" method="post"  class="border p-3 form" id="formulario-login">
					<h1 class="h3 mb-3 fw-normal" style="text-align: center;">Contacto</h1>
					<div class="form-floating">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
						<label for="nombre">Nombre</label>
					</div>
					<br>
					<div class="form-floating">
						<input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
						<label for="email">Email</label>
					</div>
					<br>
					<div class="form-group">
					  <label for="mensaje">Mensaje</label>
					  <textarea class="form-control" id="mensaje" rows="7"></textarea>
					</div>
					<br>
					<button type="submit" class="w-100 btn btn-lg btn-secondary">Contactar</button>
				</form>
			</div>
		</div>
	</main>
<?php
	include("footer.php");
?>