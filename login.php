<?php
	$tipoid=$_POST["ti"];
	$numeroid=$_POST["ni"];
	$contrasena=$_POST["con"];

	$db=mysql_connect("localhost","root","");
	mysql_select_db("conalmi",$db);

	$sql="select * from clientes where tipoid='$tipoid' and numeroid='$numeroid' and contrasena='$contrasena'";
	$result=mysql_query($sql , $db);

	if (mysql_num_rows($result)==0){
		header('Location: index.php');
	}else{
		session_start(); //inicia sesion
		$_SESSION["entrar"] ="SI"; //guarda la variable de sesion
	}
?>

<h1>MENU PROGRAMA</h1>