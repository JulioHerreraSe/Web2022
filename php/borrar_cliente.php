<?php
	include("config.php");

	$id = $_GET['id'];

	$sql="DELETE FROM clientes WHERE id=$id";
	$query =  mysqli_query($con,$sql);
	
	if($query)
	{?>
		<script>
			alert('El cliente a sido Borrado');
			window.location.href='gestionar_clientes.php';
		</script>
	<?php
	}
?>