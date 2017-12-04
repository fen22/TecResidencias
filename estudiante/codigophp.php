<?php

  if (isset($_POST["entrar"])) {
    $usuario = $_POST["numeroDeControl"];
    $pass = $_POST["password"];

    echo "$usuario, $pass";

  }

 ?>
