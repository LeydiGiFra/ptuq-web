<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cantidad Bahias Disponibles</title>

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

	<div class="fomu" align="center" >

		<section class="left">
    		<form class="parqueaderos" action="" method="POST">
				
				<div class="form-group" aling="center">
					<h2><b>Parqueaderos Disponibles</a></h2>
				</div>

				<div class="form-group" aling="center">
					<h4><b> En la Facultad de <?php $facultad; ?>, existen  <?php $cantidad; ?> bahias de parqueo libres.  </a></h4>
				</div>

				<div align="center" >
					<a href="<?php echo base_url(); ?>parqueadero" class="btn btn-primary" type="submit"> Otra Facultad? </a>
				</div>

				<br>
				<br>

				<div align="center" >
					<a href="<?php echo base_url(); ?>sesion" class="btn btn-primary" > Regresar </a>
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