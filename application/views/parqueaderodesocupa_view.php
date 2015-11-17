<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Desocupar Bahia</title>

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
    		<form class="parqueaderos" action="<?= base_url().'carro/eliminar_very'?>"  method="POST">
				
				<div class="form-group" aling="center">
					<h2><b>Desocupar Bahia de Parqueo</a></h2>
				</div>

				<div class="form-group">
					<label for ="placa">Placa del Vehiculo </label>
					<input class="form-control" placeholder="Ingrese la Placa del Vehiculo" id="placa" name="placa" minlength="5" maxlength="10"></input>
				</div>

				<div align="center" >
					<input name="submit_reg" class="btn btn-primary" type="submit" value="Desocupar"></input>
				</div>

				<br>
				<br>

				<div align="center" >
					<a href="<?php echo base_url(); ?>sesion" class="btn btn-primary" > Cancelar </a>
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