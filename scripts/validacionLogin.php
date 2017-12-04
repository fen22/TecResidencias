<?php

  global $usuario;
  global $pass;
  global $manzana = 'pera';

  if(isset($_POST["entrarAlumno"])){
    $usuario = $_POST["numeroDeControl"];
    $pass = $_POST["password"];

    if($usuario == "15050946" && $pass == "(97ech97)"){
      header("Location: ../estudiante/preInscripcion.php");
    } else {
      echo "Usuario y contraseña incorrectos $usuario, $pass";
    }
  }

  function getUsuario(){
    return $usuario;
  }

  function getPass(){
    return $pass;
  }

?>
