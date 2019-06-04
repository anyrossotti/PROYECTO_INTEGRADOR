<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

    <div class="contenedor">
      <!-- header -->
      <img src="img/Logo-Lienis.png" alt="logo" class="logo">
      <header class="cabecera-ppal">


        <ul class="navbar-ppal">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="PregFrecuentesF.php">Preguntas Frecuentes</a></li>
        </ul>

        <ul class="navbar-login">
          <li><a href="Registro.php">Registro</a></li>
        </ul>
      </header>
<section>
  <article class="Formulario">

  <h1>BIENVENIDO</h1>
<form action="Login.html" method="post">
  <label for="email" type="email" value="Email">Email</label>
  <br>
  <input class="email" type="email" name="email" placeholder="Email">
  <br>
  <br>
  <label for="pass" type="password" value="password">Contraseña</label>
  <br>
  <input class="pass" type="pass" name="password" placeholder="Password">
  <br>
  <br>
  <input class="Recordarme" type="checkbox" name="Recordarme" value="Recordarme">Recordarme
  <p>La combinación ingresada de email y contraseña no es válida.</p>
  <input class="Boton" type="button" name="Ingresar" value="Ingresar">
</form>

</article>
</section>
<h4>¡Síguenos en nuestras redes!</h4>
<footer class="my-footer">
    <ul>
    <li>
   <a class="social" href="" target="_blank"><i class="fab fa-facebook-square">     lienisjpn</i>
   <a class="social" href="" target="_blank"><i class="fab fa-instagram">     lienis.s.designs</i>
   </li>
   </ul>
 </footer>
</body>
