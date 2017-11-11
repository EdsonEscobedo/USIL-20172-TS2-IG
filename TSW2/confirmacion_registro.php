<?php
include 'config.php';
?>
<!doctype html>
<html>
	<head>
		<title>Registro de usuario / <?php echo $configuracion["nombre"] ?></title>
		<link href="css/estilo.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'plantillas/header.php' ?>
		<?php include 'plantillas/nav.php' ?>
		<section>		
			<h1 class="centrado">Registro de usuario</h1>
			<p>Su cuenta ha sido creada satisfactoriamente.</p>
		</section>
		<?php include 'plantillas/footer.php' ?>
	</body>
</html>