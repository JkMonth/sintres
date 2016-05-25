<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title> Listar en SINTRES</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon/icon1.ico">
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<body background="imagenes/fondo.png">

  <div class="container">
    <div class="row">
        
        <div class="col-md-12">
         <?php
          include 'menu.php'
         ?>
        </div>

        <br><br>

        <div class="col-md-12">
          <h1><center>LISTAR</center></h1>
        </div>

        <div class="col-md-12">
          <table class="table table-hover">
            <tr  text-align="center" bgcolor="white">
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
              include "conexion.php";
              $sql ="select * from clientes";
              $result = mysql_query($sql);
            ?>  
            <?php
              while ($row = mysql_fetch_row($result)){ 
            ?>

                <tr>
                  <td><?php echo $row[0] ?></td>
                  <td>
                    <a href="ver.php?id=<?php echo $row[1]; ?>">
                      <?php echo $row[1] ?>
                    </a>
                  </td>
                  <td><?php echo $row[2]?></td>
                  <td><?php echo $row[3]?></td>
                  <td><?php echo $row[4]?></td>
                  <td><?php echo $row[5]?></td>
                  <td><?php echo $row[6]?></td>
                  <td><?php echo $row[7]?></td>
              
                </tr>         
            <?php
              } 
            ?>
          </table>
        </div>

        <div class="col-md-12" id="footer">
          Diseñado y Administrado por: Aprendides SENA TGA Ficha 959480 &copy; 2016 | <a href="http:\\conalmi.co"><font color="#FFCD02">CONALMI S.A.S</font></a>
        </div>

    </div>
   </div>   
           
</body>
</html>