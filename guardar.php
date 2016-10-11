<?php
	$tipoid=$_POST["ti"];
	$numeroid=$_POST["ni"];
	$contrasena=$_POST["con"];
	$nombre=$_POST["nom"];
	$direccion=$_POST["dir"];
	$telefono=$_POST["tel"];
	$celular=$_POST["cel"];
	$email=$_POST["mail"];

	include "conexion.php";
	$sql="insert into clientes values('$tipoid','$numeroid','$contrasena','$nombre','$direccion','$telefono','$celular','$email')";

	$result=mysql_query($sql);
	header('Location: registro.php'); 
?>

	