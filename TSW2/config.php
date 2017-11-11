<?php
# Datos de conexión a la base de datos
$servidor_bd = "localhost";
$usuario_bd = "root";
$password_bd = "";
$nombre_bd = "gamong";
# Instancia de PDO para la conexión a la BD usando los datos de conexión
$bd = new PDO("mysql:host=$servidor_bd;dbname=$nombre_bd", $usuario_bd, $password_bd);
# Obteniendo los datos de configuracion de la BD
$query = "SELECT * FROM configuracion WHERE codigo = 1";
$resultado = $bd->query($query);
$configuracion = $resultado->fetch();
# Apertura de sesión
session_start();
$esta_identificado = isset($_SESSION["correo"]) ? true : false;
?>