<?php
	include("config.php");
	session_start();
	session_destroy();
	?>
	<script>
		alert('Sesión cerrada.');
		window.location.href='inicio.php';
	</script>

