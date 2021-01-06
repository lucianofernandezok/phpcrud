<?php

include("conexion.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM personas WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Failed.");
  }

  $_SESSION['mensaje'] = 'Eliminado Con Exito';
  $_SESSION['tipo'] = 'danger';
  header('Location: index.php');
}

?>