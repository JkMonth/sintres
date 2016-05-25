<?php
  include "conexion.php";
  $id=$_GET["id"];
  $sql="delate from clientes where numeroid = $id";
  $result = mysql_query($sql);  
  if ($resul) {
    header("Location: ver.php");
    echo "Eliminado";    
    }else{
    echo "Problemas";
    }   
?>