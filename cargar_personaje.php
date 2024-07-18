<?php 
include('conexion.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$imagen = $_POST["image"];
$descripcion = $_POST["descripcion"];

mysqli_query($conexion, "INSERT INTO personajes VALUES(DEFAULT, '$nombre', '$apellido', '$imagen', '$descripcion')");

mysqli_close($conexion);

header("Location: index.php?ok");