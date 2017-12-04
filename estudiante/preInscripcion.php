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
    <link rel="stylesheet" href="../css/preInscripcion.css">
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

    <!--Empieza el form para poder ser llenado-->
    <div class="container"><!--Se pone en container para que vaya centrado-->
      <div class="cuadroForm">
        <form action="../scripts/enviarPreInscripcion.php" method="post">

          <table class="tablaDeContenido">
            <tr>
              <td> <label>Número de Control: </label> </td>
              <td> <input class="txtField" readonly='read_only' type="text" name="numeroDeControl" value=<?php session_start(); echo $_SESSION['numeroDeControl']; ?>> </td>
            </tr>

            <tr>
              <td><label>Nombre: </label></td>
              <td><input class="txtField" readonly='read_only' type="text" name="nombreUsuario" value=<?php session_start(); echo $_SESSION['nombre']; ?>></td>
            </tr>

            <tr>
              <td><label>Semestre: </label></td>
              <td><input class="txtField" readonly='read_only' type="text" name="semestre" value=<?php session_start(); echo $_SESSION['semestre'];?>></td>
            </tr>

            <tr>
              <td><label>Correo Electrónico: </label></td>
              <td><input class="txtField" type="text" name="email" value=<?php session_start(); echo $_SESSION['email'] ?>></td>
            </tr>

            <tr>
              <td><label>Domicilio: </label></td>
              <td><textarea name="domicilio" rows="1" cols="40"></textarea></td>
            </tr>
          </table> <!--Termina la tabla para acomodar los labels y txtFields-->

          <br>

          <label>Deseas ingresar al programa de residencias en el siguiente semestre?:</label> <br>
          <label>
            <input type="radio" name="radioSiNo" value="Si">Si
          </label>
          <label>
            <input type="radio" name="radioSiNo" value="No">No
          </label>

          <br>
          <!--Aquí termina el form, termina con el botón de enviar-->
          <button type="button" name="guardar">Guardar y Enviar</button>
        </form>
      </div>
    </div>

  </body>
</html>
