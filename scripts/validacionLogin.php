<?php
require 'enviorment.php';
  session_start();//Según esto esta linea tiene que ir antes de cualquier cosa

$link=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_error()){

	die("No se pudo conectar a la base de datos");
}
  if(isset($_POST["entrarAlumno"])){
    //Se hace la conexión con la base de datos...
    //Se recauda la información necesaria, por el momento sólo se pondrá la información
    //de manera estátic
    $_SESSION['nombre'] = "Edgar Osvaldo Escobedo Hernández";
    $usuario ="select * from user where user='".mysqli_real_escape_string($link,$_POST['user'])."'";
    if($result=mysqli_query($link,$usuario)){
	    print_r(mysqli_fetch_array($result)['id']);
    }
    else{
	    echo "<p>usuaro o contraseña incorrecta</p>";
	    echo $usuario;
    }

    $pass = $_POST["password"];

    $_SESSION['numeroDeControl'] = $usuario;
    $_SESSION['pass'] = $pass;
    //header("Location: ../estudiante/preInscripcion.php");

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
