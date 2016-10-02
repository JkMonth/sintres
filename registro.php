<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title>Registro</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon/icon1.ico">
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css">

</head>
<body background="imagenes/fondo.png">

<div class="container">
  <div class="row">
      
      <div class="col-md-12 col-sm-12 col-xs-12">
       <?php
        include 'menu.php'
       ?>
      </div>

      <br><br>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1><center>REGISTRO</center></h1>
        <hr width="50%">             
          <form action="guardar.php" method="post">
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
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="con" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre o Razón Social" name="nom" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Direccion" name="dir" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Telefono" name="tel" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Celular" name="cel" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-Mail" name="mail" required>
              </div>
            
              <button type="submit" class="btn btn-warning">Registrate</button>
            </div> 
        </form>
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