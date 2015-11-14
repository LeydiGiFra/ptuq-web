<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pagina Principal</title>

	<!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet"  type="text/css">

</head>
<body>
	
	<br>
	<div align="center">                         
	    <a>
	        <img src="assets/img/logo_uq.png"  class="img-responsive" >
	    </a>
    </div>


	<div class="fomu" align="center" >

		<section class="left">
    		<form class="formularioPrincipal" action="" method="POST">
							
				<div class="form-group">
					<label for ="user">Usuario </label>
					<input class="form-control" placeholder="Ingrese su Usuario" id="user" name="username"></input>
				</div>

				<div class="form-group" aling="center">
					<label for ="password">Contraseña </label>
					<input class="form-control" type="password" placeholder="Ingrese su Contrase&ntilde;a" id="pass" name="password"></input>
				</div>

					<input class="btn btn-primary" type="submit" value="Iniciar sesión"></input>

			</form>
		</section>

		<section>
			Para el uso de esta aplicación son necesario los datos de 
			<a href="https://academu.uniquindio.edu.co:8443/uniquindio/portal/home_1/htm/login.jsp" target="_blank" >Academusoft</a>
		</section>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
</body>
</html>