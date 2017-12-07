<?php
  session_start();

  if(isset($_POST['guardar'])){
    //Todo lo que tenga que ser guardado en la base de datos...

    $siNo = $_POST['radioSiNo'];
    if($siNo == 'true') {
      header("Location: ../estudiante/login.php");
    } else {
      echo '<script type="text/javascript> alert('Tu información será guardada para cuando decidas iniciar las residencias :)'); </script> "';
    }
  }

?>
