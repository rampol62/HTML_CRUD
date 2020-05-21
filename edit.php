<?php
  include("db.php");

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM task WHERE id = $id";
    $resultado = mysqli_query($conn,$consulta);
    if (mysqli_num_rows($resultado) == 1) {
      $fila = mysqli_fetch_array($resultado);
      $titulo = $fila['titulo'];
      $descripcion = $fila['descripcion'];
    }
  }

  if (isset($_POST['actualiza'])) {
     $id = $_GET['id'];
     $titulo = $_POST['titulo'];
     $descripcion = $_POST['descripcion'];
     $consulta = "UPDATE task set titulo = '$titulo', descripcion = '$descripcion'
     WHERE id = '$id'";
     $resultado = mysqli_query($conn,$consulta);
     $_SESSION["message"] = " Se Actualizo El Registro Satisfactoriamente";
     $_SESSION["message_type"] = "warning";
     header("Location: index.php");


  }

 ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
  <div class="row">
     <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
              <div class="form-group">
                 <input type="text" name="titulo" value="<?php echo $titulo;?>"
                 class="form-control" placeholder="Actualiza el Titulo">
              </div>
              <div class="form-group">
                    <textarea name="descripcion" rows="2"
                      class="form-control" placeholder="Actualiza Descripcion">
                        <?php echo $descripcion; ?></textarea>
              </div>
              <button class="btn btn-success" name="actualiza">
                  actualiza
              </button>
            </form>
        </div>

     </div>

  </div>

</div>




<?php include("includes/footer.php") ?>
