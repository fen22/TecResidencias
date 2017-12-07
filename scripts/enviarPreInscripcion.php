<?php
  session_start();

  if(isset($_POST['guardar'])){
    //Todo lo que tenga que ser guardado en la base de datos...

    $siNo = $_POST['radioSiNo'];

    if($siNo == 'true'){
      header ("Location: ../estudiante/login.php");
    } else {
      echo '<script>';
      echo 'alert("Tu información solo será guardada pero no será enviada para revisión.") ;';
      echo '</script>';
      require('../estudiante/login.php');
    }

  }

?>
