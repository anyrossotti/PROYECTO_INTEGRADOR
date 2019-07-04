<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
  </head>
  <body>

    <?php
      require_once 'RegistroFunciones.php';
      $usuario = $_SESSION['userLogged'];
    ?>

    <header class = "cabecera">
      <nav class="navbar-ppal">
        <ul>
          <li>
            <!-- Logo -->
            <?php require_once "_logo.php" ?>
          </li>
          <li><a href="inicio.php">Inicio</a></li>
          <li class="producto">
            <a href="#">Productos <!-- <i class="fas fa-sort-down"></i> --></a>
          </li>
          <li class="buscador">
            <a href="#">
              <span><i class="fa fa-search"></i></span>
              <input class="inputs" type="search" id="search" placeholder="Buscar..." />
            </a>
          </li>
        </ul>
      </nav>
      <nav class = "navbar-login">
        <ul>
          <li>
            <a href="#" class="carro"><i class="fas fa-shopping-cart"></i></a>
          </li>
          <li class="nav-item dropdown">
  						<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							<img src="<?= $usuario['imagenFinal']; ?>" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 3px;">
  						</a>
  						<div class="dropdown-menu" aria-labelledby="dropNavBar">
  							<a class="dropdown-item" href="perfil_usuario.php">Mi perfil</a>
  							<a class="dropdown-item" href="logout.php">Salir</a>
  						</div>
  					</li>
        </ul>
      </nav>
    </header>

    <h2>Bienvenido <?= $usuario['nombre']; ?></h2>
    <div class="contenedor">
      <div class="item">
        <img class="imgPerfil" src="<?= $usuario['imagenFinal']; ?>" alt="imagen usuario">
      </div>
      <div class="item">
        <form class="formulario">
          <div>
            <label for="">Nombre completo:</label>
            <input class="inputs" type="text" name="nombre"
            value="<?= $usuario['nombre']; ?>">
          </div>
          <div>
            <label for="">Nombre de Usuario:</label>
            <input class="inputs" type="text" name="usuario"
            value="<?= $usuario['usuario']; ?>">
          </div>
          <div>
            <label for="">Fecha de nacimiento:</label>
            <input class="inputs" type="date" name=""
            value="<?= $usuario['fecha']; ?>">
          </div>
          <div>
            <label for="paises">País de nacimiento:</label>
            <select class="inputs" name="pais">
              <option value="ar">Argentina</option>
              <option value="ur">Uruguay</option>
              <option value="ch">Chile</option>
              <option value="br">Brasil</option>
              <option value="bo">Bolivia</option>
            </select>
          </div>
          <div>
            <label for="email">Email:</label>
            <input class="inputs" type="email" name="email"
             value="<?= $usuario['email']; ?>">
          </div>
          <div>
            <label for="cambiarpass">Cambiar contraseña:</label>
            <input type="checkbox">
          </div>
          <div>
            <button type="button" name="button">Editar Información</button>
          </div>
        </form>
      </div>
    </div>

    <?php require_once "_footer.php" ?>

  </body>
</html>
