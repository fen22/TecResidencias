<!-- Seccion en donde se incluye el php-->

<?php
  echo "string";
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

    <!--empieza la sección del form-->
    <section class="container">
      <div class="formLogin">
        <h1>Inicia sesión para entrar al programa de Residencias</h1>
        <form>
          <div class="cuadroLogin">
            <input class="txtField" type="text" name="numeroDeControl" placeholder="Número de Control">
            <br>
            <input class="txtField" type="password" name="password" placeholder="Contraseña">
            <br>
            <button class="button" type="submit" name="entrar">Ingresar</button>
          </div>
        </form>
      </div>
    </section>

  </body>
</html>
