<?php
	include("config.php");

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql="UPDATE clientes SET nombre='$nombre', email='$email', password='$pass' WHERE Id='$id'";
	$query =  mysqli_query($con,$sql);
	
	if($query){
	?>
	<script>
	alert('El Cliente a sido Modificado');
	window.location.href='gestionar_clientes.php';
	</script>
	<?php
	}
?>