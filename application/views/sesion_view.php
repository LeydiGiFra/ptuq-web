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
    		<form class="Sesion" action="" method="POST">
							



				<div class="form-group">
					
					<input class="btn btn-primary" type="submit" value="Mostrar Mapa"></input>
				</div>

				<div class="form-group" aling="center">
					<input class="btn btn-primary" type="submit" value="Reservar Parqueadero"></input>
				</div>

				<div class="form-group" aling="center">
					<input class="btn btn-primary" type="submit" value="Desocupar Parqueadero"></input>
				</div>

				<div class="form-group" aling="center">
					<input class="btn btn-primary" type="submit" value="Parqueaderos Disponibles"></input>
				</div>

				<div class="" aling="center">
					<a href="<?php echo base_url(); ?>Principal/logout">Cerrar sesion</a>
		
				</div>
					

			</form>
		</section>

		
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
</body>
</html>