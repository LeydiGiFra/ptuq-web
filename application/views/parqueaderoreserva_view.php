<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Reservar Bahia</title>

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


			<?php if(isset($mensaje)) :?>
			<h2><?= $mensaje?></h2>
		<?php endif;?>
    		<form class="parqueaderos" action="<?= base_url().'carro/registro_very'?>" method="POST">

    		<form class="parqueadero" action="" method="POST" onsubmit="return revisar()" >

				
				<div class="form-group" aling="center">
					<h2><b>Reservar una Bahia de Parqueo</a></h2>
				</div>


				
				<div class="form-group">
					<label for ="facultad">Ingrese facultad </label>
					<input  value="<?= @set_value('facultad')?>"class="form-control" placeholder="Ingrese Facultad" id="facultad" name="facultad" minlength="5" maxlength="10"></input>

				
					<br>
				<div class="form-group" align="center" >
					<label for ="placa">Placa del Vehiculo </label>
					<br>
					<input  value="<?= @set_value('placa')?>" class="form-control" placeholder="Ingrese la Placa del Vehiculo" id="placa" name="placa" minlength="5" maxlength="10"></input>
				</div>

				<div class="form-group">
					
					<select name="hora" id="hora">
						<OPTION >Elegir Hora</OPTION>
						<OPTION >7</OPTION>
						<OPTION >8</OPTION>
						<OPTION >9</OPTION>
						<OPTION >10</OPTION>
						<OPTION >11</OPTION>
						<OPTION >12</OPTION>
						<OPTION >13</OPTION>
						<OPTION >14</OPTION>
						<OPTION >15</OPTION>
						<OPTION >16</OPTION>
						<OPTION >17</OPTION>
						<OPTION >18</OPTION>
						<OPTION >19</OPTION>
					</select>
					<label for ="nada">:</label>
					<select name="minuto" id="minuto">
					<OPTION >00</OPTION>
						
					</select>
					</div>

				<div align="center" >
					

				
					<input class="btn btn-primary" name="submit_reg" type="submit" value="Reservar"></input>

				</div>

			

				<br>
				<br>

				<div align="center" >
					<a href="<?php echo base_url(); ?>sesion" class="btn btn-primary" > Cancelar </a>
				</div>
				
			</form>
		</section>
	
	</div>
	
	<script> 
		function revisar(){ 
		    //validar la facultad 
		    if (parqueadero.facultad=="Elegir Facultad"){ alert("Tiene que escribir la facultad"); facultad.focus(); return false; } 
		    //validar la placa 
		    if (parqueadero.placa==""){ alert("Tiene que escribir la placa"); placa.focus(); return false; } 
		}
	</script>
	
	<div align="right">
		<section>
			Version: BETA
		</section>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 

   <hr/>
   <?= validation_errors();?>

</body>
</html>