<?php
   $db = mysql_connect("localhost","root","");
   mysql_select_db("conalmi",$db);
   $sql = "select * from clientes";
   $result = mysql_query($sql);
   echo "<table class='table table-striped'>";
   echo "<tr>";
   echo "<td>tipoid</td>";
   echo "<td>numeroid</td>";
   echo "<td>contraseña</td>";
   echo "<td>nombre</td>";
   echo "<td>direccion</td>";
   echo "<td>telefono</td>";
   echo "<td>celular</td>";
   echo "<td>email</td>";
   echo "</tr>";
   while ($row = mysql_fetch_row($result)){ 
      echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>"; 
   } 
   echo "</table>"; 
?>