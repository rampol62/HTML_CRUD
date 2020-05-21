<?php

include("db.php");

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $consulta ="INSERT INTO task(titulo,descripcion) VALUES('$title','$description')";
    $resultado = mysqli_query($conn,$consulta);
    if (!$resultado) {
      die("Consulta Error so atembado");
    }
$_SESSION['message'] = 'Guardado Con EXITO !!!';
$_SESSION['message_type'] = 'success';
header("Location: index.php");

//  echo "Guardando!!!!!!   ";
//  echo $title;
//  echo "  ";
//  echo $description;
}
 ?>
