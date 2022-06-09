<?php
	include("config.php");

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$descripcion = $_POST['descripcion'];
	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];

	$sql="UPDATE productos SET nombre='$nombre', tipo='$tipo', descripcion='$descripcion', cantidad='$cantidad', precio='$precio' WHERE id='$id'";
	$query =  mysqli_query($con,$sql);
	
	if($query){
	?>
	<script>
	alert('El Producto a sido Modificado');
	window.location.href='gestionar_productos.php';
	</script>
	<?php
	}
?>