<nav>
	<ul>
		<li><a href="index.php">Principal</a></li>
		<li><a href="promociones.php">Promociones</a></li>
		<li><a href="formulario_contacto.html">Contacto</a></li>
		<li>
		<?php if ($esta_identificado) { ?>
						
			Identificado como: <?php echo $_SESSION["nombres"] ?>
				(<a href="logout.php">Cerrar sesión</a>)
						
				<?php } else { ?>
					<a href="registro.php">Registro</a> //
					<a href="login.php">Iniciar sesión</a>
			<?php } ?>
		</li>
	</ul>
</nav>