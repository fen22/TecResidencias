<!--Espacio para verificar la obtención de datos-->
<?php session_start();
  echo "Ususario: " . $_SESSION['numeroDeControl'];
  echo "\nContraseña: " . $_SESSION['pass'];
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Edgar Escobedo">
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="../css/style.css">
    <title>Residencias | Preinscripción</title>
  </head>
  <body>

    <!--Franja en donde aparece el nombre y el logo del tec-->
    <header>
      <div class="container">
        <div id="branding">
          <h1>Instituto Tecnológico de Saltillo</h1>
        </div>
        <div id="logoTec">
          <img src="../img/itsicono3.png">
        </div>
      </div>
    </header>

  </body>
</html>
