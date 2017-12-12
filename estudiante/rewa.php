<!DOCTYPE html>
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
    <meta name="viewport" content="width = device-width">
    <meta name="description" content="Web Application para el progrma de Residencias, GUI Estudiante">
    <meta name="keywords:" content="Residencias, Tec Saltillo, Instituto Tecnológico de Saltillo, Programa de Residencias">
    <meta name="author" content="Edgar Escobedo">
    <link rel="stylesheet" href="../css/rewa.css">
    <link rel="shortcut icon" href="../img/itsicono3.png" type="image/x-icon">
    <title>Estado de Residencia | <?php session_start(); echo $_SESSION['numeroDeControl']; ?></title>
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

    <!--Sección en donde se puede ver el proceso de residencias-->
    <div class="seccionGuinda">
      <div class="container" id="container1">
        <div class="box" id="primerBox">
          <div class="imgInBox">
            <!--Con este pedazo de código se puede validar la imagen que se quiera mostrar-->
            <?php session_start(); echo '<img src="../icons/done.png">'; ?>
          </div>
          <p>Estado 1</p>
        </div>
        <div class="box">
          <div class="imgInBox">
            <!--Con este pedazo de código se puede validar la imagen que se quiera mostrar-->
            <?php session_start(); echo '<img src="../icons/not_done.png">'; ?>
          </div>
          <p>Estado 2</p>
        </div>
        <div class="box">
          <div class="imgInBox">
            <!--Con este pedazo de código se puede validar la imagen que se quiera mostrar-->
            <?php session_start(); echo '<img src="../icons/not_done.png">'; ?>
          </div>
          <p>Estado 3</p>
        </div>
        <div class="box">
          <div class="imgInBox">
            <!--Con este pedazo de código se puede validar la imagen que se quiera mostrar-->
            <?php session_start(); echo '<img src="../icons/not_done.png">'; ?>
          </div>
          <p>Estado 4</p>
        </div>
        <div class="box">
          <div class="imgInBox">
            <!--Con este pedazo de código se puede validar la imagen que se quiera mostrar-->
            <?php session_start(); echo '<img src="../icons/not_done.png">'; ?>
          </div>
          <p>Estado 5</p>
        </div>
      </div>
      <div class="container" id="container2">
        <div class="links">
          <h3><a href="info.html" target="_blank">Características y Requerimientos para la Residencia</a> </h3>
          <h3><a href="letterForm.php">Formulario para Carta Compromiso</a> </h3>
          <!--Aquí se pone la condicional de si se puede o no liberar el PDF-->
          <?php session_start();
            $x = true;
            if($x){
              echo "<h3><a href=#>Generar carta compromiso</a></h3> ";
            }
          ?>
        </div>
        <!--
        <div class="adjuntarArchivo">
          <p>Adjuntar archivo de proyecto:</p>
          <input type="file" name="archivoDeProyecto" value="">
          <button type="submit" name="button">Enviar Archivo</button>
        </div>
        -->
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
