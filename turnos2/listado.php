﻿<html>
<?php 
    require "../metodos.php";
?>
<head>
<meta http-equiv="Content-Language" content="es">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado De Turnos</title>

</head>

<body background="../img/turnos2.jpg" style="background-size:cover";>
<div class="col-md"><h2>
		<img border="0" src="../img/atras.png" width="42" height="42" title="Volver al menú" 
		onclick=location.href='javascript:history.go(-1)'; onKeyPress=location.href='javascript:history.go(-1)'; style='cursor:pointer';/>
	    <label for="boton_atras"><h6>Atrás</h6></label>
	</h2></div>
	<div class="col-md-12 order-md-1"><br/>
	<div class="col-md-12 order-md-1"><br/>
	
<?php 
include "../conexion.php";
$sql = "SELECT * from turnos order by id_turno";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $turnos[] = $resultado;
    }
?>
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado De Turnos</u></font></i></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">
  
  <tr>
      <td width="10%" height="35"><p align="center"><font face="Verdana" size="4" >Item</font></i></td>
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >ID</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Fecha</font></i></td>
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Horario</font></i></td>	  
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Paciente</font></i></td>	  
      <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Medico</font></i></td>	    
	  <td width="20%" height="35"><p align="center"><font face="Verdana" size="4" >Comentarios</font></i></td>	
	  </tr>


	<?php $long = count($turnos);
				for($i=0; $i< $long; $i++){		 
				?>

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $i+1;?></font></i></td>	
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $turnos[$i]['id_turno'];?></font></i></td>
    <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $turnos[$i]['fecha_turno'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $turnos[$i]['horario_turno'];?></font></i></td>	
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $turnos[$i]['paciente_turno'];?></font></i></td>
	<td width="20%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $turnos[$i]['clinico_turno'];?></font></i></td>
	<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4" ><?php echo $turnos[$i]['comentarios_turno'];?></font></i></td>
	</tr>

  <?php  } ?>
  </table>
  </center>
</div>

</body>

</html>
