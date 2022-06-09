<?php
	include("config.php");

	$cata = $_POST['cata'];
	$sql="SELECT plazas FROM catas WHERE id = '$cata';";
	$query =  mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
	$plazas = $row['plazas'];
	if ($plazas >= 1) {

		$sql="INSERT INTO plazas (id, id_cliente, id_cata) VALUES (NULL, '5', '$cata');";
		$query =  mysqli_query($con,$sql);
		$plazas--;
		$sql="UPDATE catas SET plazas='$plazas' WHERE Id='$cata';";
		$query =  mysqli_query($con,$sql);
		if($query) {
		?>
			<script>
				alert('Cata reservada.');
				window.location.href='catas.php';
			</script>
		<?php
		}
	} else {

	}
	
	
?>