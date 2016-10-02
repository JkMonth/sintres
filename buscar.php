<?php
  include "conexion.php";


  if (empty($_POST["ti"])) {
 //Código de validación de datos para que este vacio
    $tipoid="CC";
  }else{
    $tipoid=$_POST["ti"];    
  }

  if (empty($_POST['ni'])) {
 //Código de validación de datos
    $numeroid="012";
  }else{
    $numeroid=$_POST["ni"];    
  }
  $sql ="select * from clientes where tipoid='$tipoid' and numeroid='$numeroid'";
  $result = mysql_query($sql);
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title> Buscar en SINTRES</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon/icon1.ico">
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<body background="imagenes/fondo.jpg">

  <div class="container">
    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12">
         <?php
          include 'menu.php'
         ?>
        </div>

        <br><br>

        <div class="col-md-12 col-sm-12 col-xs-12">
         <h1><center>Buscar</center></h1>
          <hr width="50%">
        	<form action="buscar.php" method="post">
            <div class="well">
              <div class="form-group">
                <label>TIPO DE IDENTIDAD:</label>
                  <select type="Text" class="form-control" name="ti">
                    <option select> Seleccione</option>
                    <option value="CC"> Cedula de Ciudadanía</option>
                    <option value="NIT"> NIT </option>
                    <option value="CE"> Cedula de Extranjería </option>
                  </select> 
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Numero de identificacion" name="ni" required>
              </div>
            
              <button type="submit" class="btn btn-warning">Buscar</button>
            </div> 
        </form>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <table class="table table-hover">
            <tr text-align="center" bgcolor="white">
               <td><strong> Tipo de identificacion</strong></td>
               <td><strong> Numero de identificacion</strong></td>
               <td><strong> Contraseña</strong></td>
               <td><strong> Nombre</strong></td>
               <td><strong> Direccion</strong></td>
               <td><strong> Telefono</strong></td>
               <td><strong> Celular</strong></td>
               <td><strong> Email</strong></td>
            </tr>
             
            <?php
              while ($row = mysql_fetch_row($result)){ 
            ?>

                <tr>
                  <td><?php echo $row[0] ?></td>
                  <td><?php echo $row[1] ?></td>
                  <td><?php echo $row[2] ?></td>
                  <td><?php echo $row[3] ?></td>
                  <td><?php echo $row[4] ?></td>
                  <td><?php echo $row[5] ?></td>
                  <td><?php echo $row[6]?></td>
                  <td><?php echo $row[7]?></td>
                </tr>         
            <?php
              } 
            ?>
          </table>
        </div>

    </div>
   </div>   

    <footer class="text-right">
      <div class="footer-below">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      Diseñado y Administrado por: Aprendides SENA TGA Ficha 959480 &copy; 2016 | <a href="http:\\conalmi.co"><font color="#FFCD02">CONALMI S.A.S</font></a>
                  </div>
              </div>
          </div>
      </div>
    </footer>
           
</body>
</html>