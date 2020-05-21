<?php

    include("db.php");

    if (isset($_GET['id'])) {
      $id = $_GET["id"];
      $consulta = "DELETE FROM task WHERE id = $id";
      $resultado = mysqli_query($conn,$consulta);
      if (!$resultado) {
          die(" No se Pudo Borrar");
        }
        $_SESSION["message"] = " Se Removio El Registro Satisfactoriamente";
        $_SESSION["message_type"] = "danger";
        header("Location: index.php");
      }

?>
