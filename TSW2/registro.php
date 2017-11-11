<?php
include 'config.php';
?>
<!doctype html>
<html>
	<head>
		<title>Registro / <?php echo $configuracion["nombre"] ?></title>
		<link href="css/estilo.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'plantillas/header.php' ?>
		<?php include 'plantillas/nav.php' ?>

		<section>		
			<h1 class="centrado">Registro de usuario</h1>

			<form action="procesar_registro.php" method="post">
			
				<div class="fila">
					<label>Nombres:</label>
					<input type="text" name="nombres" />
				</div>
				
				<div class="fila">
					<label>Apellidos:</label>
					<input type="text" name="apellidos" />
				</div>
				
				<div class="fila">
					<label>Teléfono:</label>
					<input type="text" name="celular" />
				</div>
				
				<div class="fila">
					<label>Correo:</label>
					<input type="email" name="correo" />
				</div>
				
				<div class="fila">
					<label>Contraseña:</label>
					<input type="password" name="password" />
				</div>
				
				<div class="fila">			
					<input type="submit" value="Enviar" />
				</div>
			</form>
		</section>
		<?php include 'plantillas/footer.php' ?>
	</body>
</html>