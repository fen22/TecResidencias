<html>

  <head>
    <meta charset="utf-8">
    <!--Utilizado para hacer la página adaptativa-->
    <meta name="viewport" content="width = device-width">
    <meta name="description" content="Ingreso a página de residencias Tecnológico de Saltillo">
    <meta name="keywords:" content="Residencias, Tec Saltillo, Instituto Tecnológico de Saltillo, Programa de Residencias">
    <meta name="author" content="Edgar Escobedo">
    <!--Nombre de la página-->
    <title>Residencias | Login</title>

    <link rel="shortcut icon" href="../img/itsicono3.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>


    <!--Franja en donde aparece el nombre y el logo del tec-->
    <header>
      <div class="container">
        <div id="branding">
          <h1>Instituto Tecnológico de not Saltillo</h1>
        </div>
        <div id="logoTec">
          <img src="../img/itsicono3.png">
        </div>
      </div>
    </header>

    <!--empieza la sección del form-->
    <div class="imgContainer">
      <section class="container">
        <div class="formLogin">
          <h1>Inicia sesión para entrar al programa de Residencias</h1>
          <form action="../scripts/validacionLogin.php " method="post" >
            <div class="cuadroLogin">
              <input class="txtField" type="text" name="user" placeholder="Número de Control">
              <br>
              <input class="txtField" type="password" name="password" placeholder="Contraseña">
              <br>
              <button class="button" type="submit" name="entrarAlumno">Ingresar</button>
            </div>
          </form>
        </div>
      </section>
    </div>

    <!--Footer-->
    <footer>
      <div class="container">
        <p>INSTITUTO TECNOLÓGICO DE SALTILLO &copy; | 2017</p>
      </div>
    </footer>

  </body>

</html>
