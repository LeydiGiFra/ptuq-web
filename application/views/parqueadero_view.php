<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Parqueaderos</title>

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
    		<form class="parqueaderos" action="<?php echo base_url(); ?>parqueaderosdisponibles" method="POST">
				
				<div class="form-group" aling="center">
					<h2><b>Parqueaderos Disponibles</a></h2>
				</div>

				<div class="form-group" aling="center">
					<select name="facultad" id="facultad">
						<OPTION >Elegir Facultad</OPTION>
						<OPTION VALUE="Ciencias Basícas" >Ciencias Básicas</OPTION>
						<OPTION VALUE="Economía" 	>Economía 	</OPTION>
						<OPTION VALUE="Ingeniería"	>Ingeniería </OPTION>
						<OPTION VALUE="Medicina"	>Medicina 	</OPTION>

				    	<!-- // Codigo para implementar las lista de facultades desde la base de datos
				    	//<?php
						//	foreach ($arrFacultades as $i => $facultad)
						//		echo '<option values="',$i,'">',$facultad,'</option>';
						//?> -->
					</select>

				</div>

				<div align="center" >
					<input class="btn btn-primary" type="submit" value="Seleccionar"></input>
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