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
    <link rel="shortcut icon" href="../img/itsicono3.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/rewa.css">
    <link rel="stylesheet" href="../css/tablaConFormulario.css">
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
      <h2>Formulario para Carta Compromiso</h2>
      <h4>Datos del Alumno</h4>
      <table class="tablaConFormulario">
        <tr>
          <td class="tdIzquierdo"><p>Nombre:</p> </td>
          <td><input readonly='read_only' type="text" name="nombre" value=<?php echo '"'."Edgar Osvaldo Escobedo Hernández".'"'; ?>></td>
        </tr>

        <tr>
          <td class="tdIzquierdo"><p>Número de Control:</p></td>
          <td><input readonly='read_only' type="text" name="numeroDeControl" value=<?php echo "15050946"; ?> ></td>
        </tr>

        <tr>
          <td class="tdIzquierdo"><p>Carrera:</p> </td>
          <td><input readonly='read_only' type="text" name="carrera" value=<?php echo '"Ingeniería en Sistemas Computacionales"'; ?> > </td>
        </tr>

        <tr>
          <td class="tdIzquierdo"><p>Nombre del Proyecto:</p> </td>
          <td><input type="text" name="nombreProyecto" value=<?php echo '"Nombre cool de proyecto"' ?> > </td>
        </tr>
      </table>

      <h4>Datos de la Empresa</h4>
      <table class="tablaConFormulario">
        <tr>
          <td class="tdIzquierdo"><p>Direccion:</p> </td>
          <td><input type="text" name="direccionEmpresa" value=<?php echo '"Dirección Guardada"'; ?> > </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Teléfono:</p></td>
          <td><input type="text" name="telEmpresa" value=<?php echo '"Teléfono Guardado"'; ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Departamento de operación:</p></td>
          <td><input type="text" name="departamentoDeOperacion" value=<?php echo '"Departamento Guardado"'; ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Asesor Encargado:</p></td>
          <td><input type="text" name="asesorEncargado" value=<?php echo '"Asesor Guardado"'; ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Puesto del Asesor:</p></td>
          <td><input type="text" name="puestoAsesor" value=<?php echo '"Puesto Asesor Guardado"'; ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Correo Electrónico del Asesor:</p></td>
          <td><input type="text" name="correoAsesor" value=<?php echo '"Correo Asesor Guardado"'; ?>> </td>
        </tr>
      </table>

      <h4>Horario dentro de la Empresa</h4>
      <p>Ejemplo de formato: 7:00 - 12:00 + 13:00 - 17:00</p>
      <table class="tablaConFormulario">
        <tr>
          <td class="tdIzquierdo"><p>Lunes:</p></td>
          <td><input type="text" name="lunes" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Martes:</p></td>
          <td><input type="text" name="martes" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Miercoles:</p></td>
          <td><input type="text" name="miercoles" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Jueves:</p></td>
          <td><input type="text" name="jueves" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Viernes:</p></td>
          <td><input type="text" name="viernes" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Sábado:</p></td>
          <td><input type="text" name="sabado" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Domingo:</p></td>
          <td><input type="text" name="domingo" placeholder="hh:mm - hh:mm + hh:mm - hh:mm"  value=<?php ?>> </td>
        </tr>
      </table>

      <h4>Periodo de realización de Residencia</h4>
      <table class="tablaConFormulario">
        <tr>
          <td class="tdIzquierdo"><p>Fecha de inicio:</p></td>
          <td><input type="date" name="fechaInicio" value=<?php echo date("Y-m-d"); ?> > </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Fecha de terminación:</p></td>
          <td><input type="date" name="fechaTermino" value=<?php echo date("Y-m-d"); ?> > </td>
        </tr>
        <tr>
          <td class="tdIzquierdo"><p>Total de horas:</p></td>
          <td><input min="0" type="number" name="horasTotales" placeholder="Ejemplo: 500 (sin texto)" value=<?php ?>> </td>
        </tr>
      </table>

      <div class="botones">
        <button class="botonFormulario" type="submit" name="guardar">Guardar</button>
        <button class="botonFormulario" type="submit" name="guardarYEnviar">Guardar y Enviar</button>
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
