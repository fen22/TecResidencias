<?php
  session_start();//Según esto esta linea tiene que ir antes de cualquier cosa

  if(isset($_POST["entrarAlumno"])){
    //Se hace la conexión con la base de datos...
    //Se recauda la información necesaria, por el momento sólo se pondrá la información
    //de manera estática
    $_SESSION['nombre'] = "Edgar Osvaldo Escobedo Hernández";
    $_SESSION['carrera'] = 'Ingeniería en Sistemas Computacionales';
    $_SESSION['planDeEstudios'] = 'asd123adk';
    $_SESSION['email'] = 'edgaar.escobedo@gmail.com';
    $_SESSION['domicilio'] = 'Blvd. Emilio Arizpe de la Maza #341';

    $usuario = $_POST["numeroDeControl"];
    $pass = $_POST["password"];

    $_SESSION['numeroDeControl'] = $usuario;
    $_SESSION['pass'] = $pass;
    header("Location: ../estudiante/preInscripcion.php");

  } else if(isset($_POST['entrarAdmin'])){
    //Se guardan los datos en un session para que puedan ser accedidos más tarde
    $ususario = $_POST['idUsuario'];
    $pass = $_POST['pass'];

    $_SESSION['idUsuario'] = $usuario;
    $_SESSION['pass'] = $pass;

    //Se redirecciona a donde se encuentra el control de administrador
    //header...
  }



?>
