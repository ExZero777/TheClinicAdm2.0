<html>
<?php

	require "../conexion.php";
  require "../metodos.php";




 $sql = "UPDATE turnos SET fecha_turno='" . ($_POST['fecha_turno']) 				."'," .
    "horario_turno='" 		. $_POST['horario_turno']									."'," .			
    "paciente_turno='" 		. $_POST['paciente_turno']									."'," .		
    "clinico_turno='" 		. $_POST['clinico_turno']									."'," .		
    "comentarios_turno='" 	. $_POST['comentarios_turno']								."'" .			
		" where id_turno =" . ($_POST['id_turno']) ;						
								
 
?>								

<body background="../img/turnos2.jpg" style="background-size:cover";>
    <div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
  <div class="col-sm-2"><h2></h2></div>	
    <img class="d-block mx-auto mb-1" src="../img/jdlsa.png" alt="" width="72" height="72">
    <p class="lead"><h4><strong>Modificacion de Turnos y Servicios / Profesiones</strong></h4></p>
  </div>
 
 <?php 

  $fehor=FALSE;
  $sql2 = "SELECT fecha_turno, horario_turno, paciente_turno, clinico_turno, comentarios_turno FROM turnos ";
  $query = $mysqli->query($sql2);
  while($resultado = $query->fetch_assoc()) {
      if($_POST['fecha_turno']==$resultado['fecha_turno'] && $_POST['horario_turno']==$resultado['horario_turno']){
        echo "<h4 class='mb-4'>Horario Ya Tomado Vuelva A Ingresar Otro Horario</h4>"; 
        $fehor=TRUE;
      }
  } 
 
  if($fehor==FALSE){
    $mysqli->query($sql);
    echo "  <a href='../turnos/'> <div class='col-md-12 order-md-1'>";
    echo    "<h4 class='mb-4'>Datos guardados correctamente</h4> </a>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

       

$mysqli->close();

?>

<a href="javascript:history.go(-3)">	 <hr class="mb-4">
<DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-5" type="submit">Volver</button>
        </div>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>




