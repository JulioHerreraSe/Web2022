<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../img/icono.png">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/propio.css">
	    <script src="../js/bootstrap.min.js"></script>
		<title>Cervezas Artesanas</title>
	</head>
	<body>
		<header class="site-header sticky-top py-1">
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
				    <a class="navbar-brand" href="http://localhost/Web2022/php/inicio.php"><img src="../img/logo_cervezas.png" class="logo" width="95px" height="50px" alt="Logo de la empresa"></a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarText">
				      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				      		<li class="nav-item">
					            <a class="nav-link" href="http://localhost/Web2022/php/inicio.php">Inicio</a>
					        </li>
				      		<li class="nav-item dropdown">
					            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            Cervezas
					            </a>
					            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
						            <li><a class="dropdown-item" href="http://localhost/Web2022/php/cervezas.php?tipo=IPA&keyboard=">IPA</a></li>
						            <li><a class="dropdown-item" href="http://localhost/Web2022/php/cervezas.php?tipo=larger&keyboard=">Larger</a></li>
						            <li><a class="dropdown-item" href="http://localhost/Web2022/php/cervezas.php?tipo=trapenses&keyboard=">Trapenses</a></li>
						            <li><hr class="dropdown-divider"></li>
						            <li><a class="dropdown-item" href="http://localhost/Web2022/php/cervezas.php?tipo=&&keyboard=">Ver todas</a></li>
					            </ul>
					        </li>
					        <li class="nav-item">
					            <a class="nav-link" aria-current="page" href="http://localhost/Web2022/php/catas.php">Catas</a>
					        </li>
					        <li class="nav-item">
					            <a class="nav-link" href="http://localhost/Web2022/php/contacto.php">Contacto</a>
					        </li>
					        <?php  
			      				if ($_SESSION['nombre_usuario'] == "admin") {?>
							     	<li class="nav-item" >
							            <a class="nav-link" href="http://localhost/Web2022/php/gestionar_productos.php">Gestión productos</a>
							        </li>
							        <li class="nav-item">
							            <a class="nav-link" href="http://localhost/Web2022/php/gestionar_clientes.php">Gestión clientes</a>
							        </li>
						     <?php } ?>
				      	</ul>
				      	<form class="d-flex" action="buscar.php" method="POST">
				        	<input class="form-control me-2 mt-2" name="keyboard" type="search" placeholder="Buscar" aria-label="Search">
				        	<button class="btn btn-outline-secondary mt-2" type="submit">Buscar</button>
				      	</form>
				      	<ul class="navbar-nav">
				      		<li class="nav-item">
					            <a class="nav-link" aria-current="page" href="#"></a>
					        </li>
				      		<li class="nav-item">
				      			<?php  
				      				if (!isset($_SESSION['nombre_usuario'])) {
				      					echo '<a class="nav-link" aria-current="page" href="http://localhost/Web2022/php/login.php">Login</a>';
				      				} else {
				      					?>
				      					<li class="nav-item dropdown">
								            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								            <?php echo $_SESSION['nombre_usuario']?>
								            </a>
								            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
									            <li><a class="dropdown-item" href="http://localhost/Web2022/php/cerrar_sesion.php">Cerrar Sesion</a></li>
								            </ul>
								        </li>
								        <?php
				      				}
				      			?>
					        </li>
					        <?php if (isset($_SESSION['nombre_usuario'])) {?>
					        <li class="nav-item">
					            <a class="nav-link" aria-current="page" href="http://localhost/Web2022/php/carrito.php">Carrito<img class="carro" src="../img/carrito.png" alt="Carrito de la compra"></a>
					        </li>
					    	<?php }?>
				      	</ul>
			    	</div>
			  	</div>
			</nav>
		</header>
