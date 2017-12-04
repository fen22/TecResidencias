<?php
  session_start();//Según esto esta linea tiene que ir antes de cualquier cosa

  if(isset($_POST["entrarAlumno"])){
    $usuario = $_POST["numeroDeControl"];
    $pass = $_POST["password"];

    $_SESSION['numeroDeControl'] = $usuario;
    $_SESSION['pass'] = $pass;
    header("Location: ../estudiante/preInscripcion.php");

  }

?>
