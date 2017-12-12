<html>

  <!--Script para el reloj-->
  <script type="text/javascript">
    function startTime(){
      today=new Date();
      month=today.getMonth()+1;
      year=today.getFullYear();
      day=today.getDate();
      h=today.getHours();
      m=today.getMinutes();
      s=today.getSeconds();
      m=checkTime(m);
      s=checkTime(s);
      document.getElementById('reloj').innerHTML=day+"/"+month+"/"+year+" | "+ h+":"+m+":"+s;
      t=setTimeout('startTime()',500);}

    function checkTime(i) {
      if (i<10) {
        i="0" + i;
      }
      return i;
    }

    window.onload=function(){
      startTime();
    }
  </script>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Edgar Escobedo">
    <meta name="viewport" content="width = device-width">
    <link rel="stylesheet" href="../css/preInscripcion.css">
    <link rel="shortcut icon" href="../img/itsicono3.png" type="image/x-icon">
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

    <!--En esta parte se verá el nombre del usuario así como la fecha del sistema-->
    <div class="usuarioYFecha">
      <div class="container" id="containerTabla">
        <table class='tablaUsuarioYFecha'>
          <tr>
            <td class="tdIzquierdo"><p><?php session_start(); echo $_SESSION['nombre']; ?> </p> </td>
            <td class="tdEnmedio"><p></p> </td>
            <td><p id="reloj"></p> </td>
          </tr>
        </table>
      </div>
    </div>

    <!--Empieza el form para poder ser llenado-->
    <div class="container"><!--Se pone en container para que vaya centrado-->
      <div class="cuadroForm">
        <form action="../scripts/enviarPreInscripcion.php" method="post">

          <h2>Formulario de PreInscripción</h2>
          <p>Verifica que la información sea correcta.</p>
          <table class="tablaDeContenido">
            <tr>
              <td class="tdIzquierdo"> <label>Número de Control: </label> </td>
              <td> <input required class="txtField" readonly='read_only' type="text" name="numeroDeControl" value=<?php session_start(); echo $_SESSION['numeroDeControl']; ?>> </td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Nombre: </label></td>
              <td><input required class="txtField" readonly='read_only' type="textArea" name="nombreUsuario" value=<?php session_start(); echo '"'; echo $_SESSION['nombre']; echo '"';?>></td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Clave plan de estudios: </label></td>
              <td><input required class="txtField" readonly='read_only' type="text" name="semestre" value=<?php session_start(); echo $_SESSION['planDeEstudios'];?>></td>
            </tr>

            <tr>
              <td class="tdIzquierdo" > <label>Carrera: </label> </td>
              <td> <input required class="txtField" readonly='read_only' type="text" name="carrera" value=<?php session_start(); echo '"'.$_SESSION['carrera'].'"'; ?>> </td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Correo Electrónico: </label></td>
              <td><input required class="txtField" type="email" name="email" value=<?php session_start(); echo $_SESSION['email'] ?>></td>
            </tr>

            <tr>
              <td class="tdIzquierdo"><label>Domicilio Particular: </label></td>
              <td> <input required type="text" name="domicilio" value=<?php session_start(); echo '"'; echo $_SESSION['domicilio']; echo '"'; ?>> </td>
            </tr>

            <tr>
              <td class="tdIzquierdo" > <label>Ciudad: </label> </td>
              <td> <input required type="text" name="ciudad" value=<?php session_start(); echo '"'.$_SESSION['ciudad'].'"'; ?> </td>
            </tr>

            <tr>
              <td class='tdIzquierdo'> <label>Fecha:</label> </td>
              <!--Se le pone como valor por defecto la fecha actual-->
              <td> <input class="date" required type="date" name="fecha" value="<?php echo date("Y-m-d"); ?>"> </td>
            </tr>
          </table> <!--Termina la tabla para acomodar los labels y txtFields-->

          <br>

          <div class="radios">
            <label>¿Deseas ingresar al programa de residencias en el siguiente semestre?</label> <br><br>
            <input type="radio" name="radioSiNo" value='true'><label>Si</label> <br>
            <input type="radio" name="radioSiNo" value='false' checked><label>No</label> <br>
          </div>
          <!--Aquí termina el form, termina con el botón de enviar-->
          <button type="submit" name="guardar">Guardar y Enviar</button>
        </form>
      </div>
    </div>

    <!--Footer-->
    <footer>
      <div class="container">
        <p>INSTITUTO TECNOLÓGICO DE SALTILLO &copy; | 2017</p>
      </div>
    </footer>

  </body>
</html>
