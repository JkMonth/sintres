<?php
session_start();
if ($_SESSION["entrar"] != "SI") {
	header("Location: index.php");
	exit();
	}	
?>