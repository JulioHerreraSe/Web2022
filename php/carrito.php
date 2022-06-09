<?php
	include("config.php");
	include("header.php");
?>
	<main style="margin-top: 120px;">
		<div class="container" style="margin: 100px">
			<table class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>email</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th><?php echo array_key_first($_SESSION['carrito'])?></th>
					</tr>
				</tbody>
			</table>
		</div>
	</main>
	
<?php
	include("footer.php");
?>
<script type="text/javascript">
	console.log(2);

	var data = sessionStorage.getItem("carrito");
	console.log(data);
</script>