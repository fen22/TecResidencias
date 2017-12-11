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

    $usuario ="select * from users where control_number='".mysqli_real_escape_string($link,$_POST['user'])."'";

    if($result=mysqli_query($link,$usuario)){
	    $pass=mysqli_fetch_array($result)['pass'];
	    echo $pass;
		echo "<br>";
	    echo md5($_POST['password']);
		echo "<br>";
	    if($pass  == md5($_POST['password'])){
		 //   echo "Contraseña correcta C:";
		    header("Location: ../estudiante/preInscripcion.php");
	    }
	    else{
		  //  echo "Usuario o contraseña incorrecta";
		    header("Location: ../estudiante/login.php");
	    }
    }
    else{
	    echo "Usuario o contraseña incorrecta1";
    }


  } else if(isset($_POST['entrarAdmin'])){
    //Se guardan los datos en un session para que puedan ser accedidos más tarde
    //Se redirecciona a donde se encuentra el control de administrador
    //header...
  } 
?>
