<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title>Bienvenidos a Sintres</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon/icon1.ico">
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css">

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
      
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h1><center>INGRESAR</center></h1>
          <hr> 
            <form action="validar.php" method="post">
              <div class="jk">
                <div class="tamano">
                  <label>TIPO DE IDENTIDAD:</label>
                  <select type="Tipoid" class="form-control" name="ti">
                    <option select> Seleccione</option>
                    <option> Cedula de Ciudadanía</option>
                    <option> NIT </option>
                    <option> Cedula de Extranjería </option>
                  </select> 
                </div>
        
                <div class="tamano">
                  <input type="text" class="form-control" placeholder="Numero de Identificacion" name="ni" required>
                </div>
                <div class="tamano">
                  <input type="password" class="form-control" placeholder="Contraseña" name="con" required>
                </div>
              <button type="submit" class="btn btn-warning btn-md">Entrar</button>
              
                <h3>¿Eres nuevo? <br> Registrate gratis</h3>
              <a href="registro.php" class="btn btn-warning btn-md" role="button" type="submit">Registrarme</a>            
            </div>
           </form>
      </div>

      <div class="col-md-8 col-sm-12 col-xs-12">
        <h1><center>BIENVENIDOS</center></h1>
          <hr>
          <center> <img  src= "imagenes/logo.png"  alt= "imagen Responsive"  class= "img-thumbnail"> </center>
          <h2>¿En que consiste?</h2> 
          <p><strong>SINTRES</strong> (Sistema de información de trazabilidad de estibas) es un sistema de información que permite consultar la trazabilidad de las estibas y productos de embalajes en madera; a traves de este sistema buscamos informar a nuestros usuarios sobre el estado real de los procesos y fases que corresponden al diseño, producción y distribución de los productos solicitados.</p> 
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