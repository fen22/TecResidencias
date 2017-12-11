<?php
require 'enviorment.php';
  session_start();//Según esto esta linea tiene que ir antes de cualquier cosa

$link=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_error()){

	die("No se pudo conectar a la base de datos");
}
  
  if(isset($_POST['guardar'])){
    //Todo lo que tenga que ser guardado en la base de datos...

    $usuario =" * from user where user='".mysqli_real_escape_string($link,$_POST['user'])."'";
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
