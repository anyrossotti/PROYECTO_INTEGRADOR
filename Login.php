<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="row">
    <div class="contenedor">

      <!-- header -->

      <header class="cabecera">
        <ul class="main-nav">
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="PregFrecuentesF.php">Faq</a></li>
        </ul>

        <ul class="nav-login">
          <li><a href="Registro.php">Registro</a></li>
        </ul>
      </header>

      <!-- Logo -->
      <?php require_once "_logo.php" ?>

<div class="formulario">
  <h2>BIENVENIDO!</h2>
  <form class="" action="Login.html" method="post">
  <label for="email" type="email" value="Email" required>Email</label>
  <br>
  <input class="email" type="email" name="email" placeholder="E-mail">
  <br>
  <br>
  <label for="pass" type="password" value="password" required>Contraseña</label>
  <br>
  <input class="pass" type="pass" name="password" placeholder="Password">
  <br>
  <br>
  <input class="Recordarme" type="checkbox" name="Recordarme" value="Recordarme">Recordarme
  <p>La combinación ingresada de email y contraseña no es válida.</p>
  <input class="Boton" type="button" name="Ingresar" value="Ingresar">
  </form>
</div>
</body>

<?php require_once "_footer.php" ?>

</div>
</html>
