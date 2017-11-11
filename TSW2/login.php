<?php
include 'config.php';
?>
<!doctype html>
<html>
	<head>
		<title>Inicio de sesión / <?php echo $configuracion["nombre"] ?></title>
		<link href="css/<?php echo $tema ?>" rel="stylesheet" />
		<link href="css/estilo.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'plantillas/header.php' ?>
		<?php include 'plantillas/nav.php' ?>

		<section>		
			<h1 class="centrado">Inicio de sesión</h1>
		</section>
		<?php include 'plantillas/footer.php' ?>
	</body>
</html>