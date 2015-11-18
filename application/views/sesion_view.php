<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pagina Principal - PTUQ</title>

	<!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet"  type="text/css">

</head>
<body>
	<div align="center"> 
		<br>
	    <a>
	        <img src="assets/img/logo_uq.png"  class="img-responsive" >
	    </a>
    </div>

    <div class="form-group" align="center">
    	<br>
	   	<h4>Bienvenido a nuestro aplicativo de asistencia de parqueo!</h4>	
	</div>
		
	<div class="fomu" align="center" >

		<section class="left">
    		<form class="Sesion" action="" method="POST">

				<div class="form-group" aling="center">
					<a href="<?php echo base_url(); ?>parqueadero"  class="btn btn-primary" >Parqueaderos Disponibles</a>
				</div>

				<div class="form-group" aling="center">
					<a href="<?php echo base_url(); ?>parqueaderoreserva"  class="btn btn-primary" >Reservar Parqueadero</a>
				</div>

				<div class="form-group" aling="center">
					<a href="<?php echo base_url(); ?>parqueaderodesocupa"  class="btn btn-primary" >Desocupar Parqueader</a>

				</div>
				
				<div class="form-group">
					<a href="<?php echo base_url(); ?>mapa"  class="btn btn-primary" >Mostrar Mapa</a>			
				</div>

				<div class="" aling="center">
					<a  href="<?php echo base_url(); ?>principal/logout">Cerrar sesion</a>
		
				</div>

				
			</form>
		</section>

		
	</div>
	
	<div align="right">
		<section>
			Version: BETA
		</section>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
</body>
</html>