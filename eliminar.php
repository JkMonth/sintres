<?php

  $a=$_GET["id"];
  include "conexion.php";

  $sql="delete from clientes where numeroid = '$a'";
  $result = mysql_query($sql);  
  
  if ($result) {
    header("Location: listar.php");
    // echo "Eliminado";    
    }else{
    echo "Problemas";
    } 

?>

