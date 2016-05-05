<?php
	
	$tipoid=$_POST["ti"];
	$numeroid=$_POST["ni"];
	$contraseña=$_POST["con"];
	$nombre=$_POST["nom"];
	$direccion=$_POST["dir"];
	$telefono=$_POST["tel"];
	$celular=$_POST["cel"];
	$email=$_POST["mail"];

	$db = mysql_connect("localhost", "root","");
	mysql_select_db("conalmi",$db);
	$sql ="insert into clientes values('$tipoid','$numeroid','$contraseña','$nombre','$direccion','$telefono','$celular','$email')";
	$result = mysql_query($sql);
	
	echo "Registro Completado";
?>



