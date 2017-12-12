<?php
  require 'enviorment.php';
  session_start();//Según esto esta linea tiene que ir antes de cualquier cosa

  $link=mysqli_connect($host,$user,$pass,$db);
  if(mysqli_connect_error()){

    echo '<script>'.
      'alert("No se pudo conectar con la base de datos"); '.
      'location.href = "../estudiante/login.php"; '.
      '</script>';

  }

  //Se entra siempre y cuando no haya habido error con la DB
  if(isset($_POST["entrarAlumno"])){

    //Se conecta con la base de datos

    $usuario = "select * from users where control_number='".mysqli_real_escape_string($link,$_POST['user'])."'";

    if($result=mysqli_query($link,$usuario)){
	    $pass=mysqli_fetch_array($result)['pass'];

	    if($pass  == md5($_POST['password'])){
        $_SESSION['numeroDeControl'] = $_POST['user'];
		    header("Location: ../estudiante/preInscripcion.php");
	    }
	    else{
        echo '<script>'.
          'alert("Usuario y/o Contraseña incorrectos."); '.
          'location.href = "../estudiante/login.php"; '.
          '</script>';
	    }
    }
    else{
      echo '<script>'.
        'alert("Usuario y/o Contraseña incorrectos."); '.
        'location.href = "../estudiante/login.php"; '.
        '</script>';
    }


  }
?>
