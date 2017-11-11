<?php
# Entrada
$nombres 	= $_POST["nombres"];
$apellidos 	= $_POST["apellidos"];
$celular 	= $_POST["celular"];
$correo 	= $_POST["correo"];
$password 	= $_POST["password"];
# Proceso
include 'config.php';
$password_hashed = md5($password);
$query = "INSERT INTO usuarios (codigo, nombres, apellidos, celular, correo, password) VALUES (NULL, '$nombres', '$apellidos', '$celular', '$correo', '$password_hashed')";
$query2 = "INSERT INTO usuarios VALUES (NULL, '$nombres', '$apellidos', '$celular', '$correo', '$password_hashed')";
$bd->query($query);
// Iniciar sesión
session_start();
$_SESSION["correo"] = $correo;
$_SESSION["nombres"] = $nombres;
$_SESSION["apellidos"] = $apellidos;

# Salida
header("Location: confirmacion_registro.php");
?>