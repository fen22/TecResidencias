<?php
  session_start();

  if(isset($_POST['guardar'])){
    //Todo lo que tenga que ser guardado en la base de datos...

    $siNo = $_POST['radioSiNo'];

    if($siNo == 'true'){
      echo '<script>'.
        'alert("Tu información ha sido guardada y enviada a revisión"); '.
        'location.href = "../estudiante/rewa.php"; '.
        '</script>';

    } else {
      echo '<script>';
      echo 'alert("Tu información solo será guardada pero no será enviada para revisión.") ;';
      echo 'location.href = "../estudiante/login.php";';
      echo '</script>';
    }

  }

?>
