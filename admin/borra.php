<?php
	require "../conexion.php";
	require "../metodos.php";

$sql = "delete from recibos where id_recibo=" . $_GET['id_recibo'] ;		
?>

<body background="../img/admin2.jpg">
    <div class="container">
  <div class="py-5 text-center">
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.png" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <p class="lead"><h4><strong>Eliminar Recibos / Servicios</strong></h4></p>
  </div>

 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../admin/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Recibo Eliminada Correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

<a href="../admin">	 <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Volver</button>
  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1">&copy; 2020 - JDL S.A</p>

  </footer>
</div>

</html>



