<?php
	include("config.php");

	$id = $_GET['id'];

	$sql="DELETE FROM productos WHERE id=$id";
	$query =  mysqli_query($con,$sql);
	
	if($query)
	{?>
		<script>
			alert('El producto a sido Borrado');
			window.location.href='gestionar_productos.php';
		</script>
	<?php
	}
?>