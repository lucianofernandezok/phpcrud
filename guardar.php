
  
<?php

include("conexion.php");

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO personas(titulo, descripcion) VALUES ('$title', '$description')";
  $resultado = mysqli_query($conexion, $query);
  if(!$resultado) {
    die("Query Failed.");
  }


$_SESSION['mensaje'] = 'Guardado con Exito';
$_SESSION['tipo'] = 'success';

header("location: index.php");
 

}

?>





























