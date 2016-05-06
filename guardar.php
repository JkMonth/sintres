<?php
	$tipoid=$_POST["ti"];
	$numeroid=$_POST["ni"];
	$contraseña=$_POST["con"];
	$nombre=$_POST["nom"];
	$direccion=$_POST["dir"];
	$telefono=$_POST["tel"];
	$celular=$_POST["cel"];
	$email=$_POST["mail"];

	error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
	$db=mysql_connect("localhost","root","");
	mysql_select_db("conalmi",$db);
	$sql="insert into clientes values('$tipoid','$numeroid','$contraseña','$nombre','$direccion','$telefono','$celular','$email')";

	$result=mysql_query($sql);
?>

<h1>REGISTRADO</h1>

<a href="index.html">Regresar</a>


