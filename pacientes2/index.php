<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>JDL S.A - TheClinicAdm</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body background="../img/pacientes.jpg" style="background-size:cover";>
  <div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
		onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>
    <div class="container">
    
  <div class="py-5 text-center">
  
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <p class="lead"><h4><strong>Servicios Médicos e Informáticos</strong></h4></p>
  <hr>
  <div class="row">


    <div class="col-sm-1"><h2>
		<img border="0" src="../img/add.png" width="48" height="48" title="Ingresar Paciente" 
		onclick=location.href='pacientes2.php'; onKeyPress=location.href='pacientes2.php';	style='cursor:pointer';>
    <label for="ingresar_paciente"><h6>Ingresar paciente</h6></label>
	</h2></div>
  
	  <div class="col-sm-1"><h2>
    <img border="0" src="../img/check.png" width="48" height="48" title="Listado" 
		onclick=location.href='listado.php'; onKeyPress=location.href='listado.php';
		style='cursor:pointer';>
    <label for="listado_tabla"><h6>Listado en tabla</h6></label>
    </h2></div>
    <div class="col-sm-2"><h2></h2></div>	

    </div>
    <div class="col-sm-3">
      <h4 class="mb-1"> </h4>
	</div>
  </div>
    <div class="col-md-12 order-md-1">
      <h4 class="mb-1">Pacientes</h4>
	</div>

<?php 
   require "../conexion.php";

  $sql = "SELECT * from pacientes order by id_paciente";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $pacientes[] = $resultado;
    }
  
?>    
        <div class="list-group">
		
	    <?php 				
				$long = count($pacientes);
				for($i=0; $i< $long; $i++){
			?>

		<div class="list-group">
				
    <a 	
						 class="list-group-item bg-dark">
				<h4 class="list-group-item-heading text-light"> <?php echo $pacientes[$i]['id_paciente'] ."";?> </h4>
				<p class="list-group-item-text text-light"><?php 	echo "Nombre: " . $pacientes[$i]['nombre_paciente'] ." - Apellido: "; 
                            echo $pacientes[$i]['apellido_paciente'] ." - D.N.I: "; 
                            echo $pacientes[$i]['dni_paciente'] ." - Domicilio: "; 
                            echo $pacientes[$i]['domicilio_paciente'] ." - Teléfono: "; 
                            echo $pacientes[$i]['telefono_paciente'] ." - Edad: "; 
                            echo $pacientes[$i]['edad_paciente'] ." - Provincia: "; 
                            echo $pacientes[$i]['provincia_paciente'] ." - Barrio: "; 
                            echo $pacientes[$i]['barrio_paciente'] ." - Fecha De Nac.: ";
                            echo $pacientes[$i]['fech_nac_paciente'] ." - N° Historia Clínica: ";
                            echo $pacientes[$i]['historia_paciente'] ." - Obra Social: ";
                            echo $pacientes[$i]['obra_soc_paciente'] ." - Medico: ";
                            echo $pacientes[$i]['medico_paciente'] ." - Email: ";
                            echo $pacientes[$i]['email_paciente'] ."";
														?></p>		 
				</a>
    	</div>
	<?php  } ?>
	
				
		</div>
        <a href="javascript:history.go(-1)">	 <hr class="mb-4">
        <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-4" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
     
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-dark">&copy; 2020 - JDL S.A</p>
   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
