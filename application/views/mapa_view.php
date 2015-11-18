<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> <?php echo $titulo; ?> </title>

	<!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet"  type="text/css">

</head>
<body>
	<div align="center" >
		<br>
		<a href="<?php echo base_url(); ?>sesion" class="btn btn-primary" > Regresar </a>
	</div
	<div align="center" >
		<br>
		<center> <h4> <?php echo $contenido; ?> </h4> </center>
	</div>
	<div align="center" >
		<br>                         
	    <a>
	        <img  src="assets/img/mapa.png"  class="responsive" >
	    </a>
    	<br>
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