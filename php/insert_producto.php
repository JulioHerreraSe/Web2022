<?php
	include("config.php");

	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$descripcion = $_POST['descripcion'];
	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];
	$imagen = $_FILES['imagen']['name'];

	$sql="INSERT INTO productos (id, nombre, tipo, descripcion, cantidad, precio, imagen) VALUES (NULL, '$nombre', '$tipo', '$descripcion', $cantidad, $precio, '$imagen');";
	$query =  mysqli_query($con,$sql);
	
	if($query){
?>
	<script>
		alert('Tu producto a sido creada.');
		window.location.href='gestionar_productos.php';
	</script>
<?php
	}
?>