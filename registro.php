<html>
<head>
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>SINTRES</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon/icon1.ico">


</head>
<body background="imagenes/fondo.png">

  <?php include 'menu.php' ?>
  
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 col-md-12 col-sm-12">
            <h1><center>REGISTRO</center></h1>
        		<hr width="50%">             
              <form>
              <div class="well">
      					<div class="form-group">
                  <label>TIPO DE IDENTIDAD:</label>
      						<select type="Tipoid" class="form-control">
                    <option select> Seleccione</option>
      							<option> Cedula de Ciudadanía</option>
      							<option> NIT </option>
      							<option> Empresa </option>
      						</select> 
  							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Usuario">
  							</div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Contraseña">
                </div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Direccion">
  							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Telefono">
 	 							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Celular">
  							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="E-Mail">
  							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" placeholder="Telefono"> 
  							</div>
  						
  							<div class="checkbox">
    							<label align="left">
      							<input type="checkbox"> Acepto terminos y condiciones 
    							</label>
  							</div>
 
								<button type="button" class="btn btn-warning">Registrate</button>
							</form>
				</div>

			</div>
		</div>

        <div class="container">
          <div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-12">
              <hr>
              <p class="copyright">Diseñado y Administrado por: Aprendides SENA TGA Ficha 959480 &copy; 2016 | <a href="http:\\conalmi.co">CONALMI S.A.S.</a><p>
            </div>

          </div>
        </div>  
    
			
</body>
</html>