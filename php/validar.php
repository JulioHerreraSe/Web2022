<?php
	include("config.php");
	session_start();
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$sql="SELECT * FROM clientes WHERE email like '$email' AND password like '$pass'";
	$query =  mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
	
	if($row['nombre'] != null){
		$_SESSION['nombre_usuario']=$row['nombre'];
		$_SESSION['carrito'] = [];

		$_SESSION['cantidad'] = [];
?>
	<script>
		window.sessionStorage.setItem("carrito", JSON.stringify([]));
		window.location.href='inicio.php';
	</script>
<?php
	} else {
		session_destroy();
?>
	<script>
		alert('Usuario o contraseña incorrecta.');
		window.location.href='login.php';
	</script>
<?php
	}
?>