<?php
	include("config.php");

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql="INSERT INTO clientes (id, nombre, email, password) VALUES (NULL, '$nombre', '$email', '$pass');";
	$query =  mysqli_query($con,$sql);
	
	if($query){
?>
	<script>
		alert('Tu cuenta a sido creada.');
		window.location.href='http://localhost/Web2022/php/inicio.php';
	</script>
<?php
	}
?>