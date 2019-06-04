<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="css/perfil_usuario.css">
  </head>
  <body>

    <header class = "cabecera">
      <nav class="navbar-ppal">
        <ul>
          <li>
            <img src="img/Logo-Lienis.png" alt="Logo Lienis">
          </li>
          <li><a href="#">Inicio</a></li>
          <li class="producto">
            <a href="#">Productos <!-- <i class="fas fa-sort-down"></i> -->
            </a>
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
          <li>
            <a href="#">
              <img src="img/Perfil.jpg" alt="imagen perfil">
              <i class="fas fa-sort-down"></i>
            </a>
          </li>
        </ul>
      </nav>
    </header>

    <h1>Bienvenida Maribel</h1>

    <div class="contenedor">
      <div class="item">
        <img class="imgPerfil" src="img/Perfil.jpg" alt="imagen usuario">
      </div>
      <div class="item">
        <form class="formulario">
          <div>
            <label for="">Nombre:</label>
            <input class="inputs" type="text" name="" value="Maribel">
          </div>
          <div>
            <label for="">Apellido:</label>
            <input class="inputs" type="text" name="" value="Claros">
          </div>
          <div>
            <label for="">Fecha de nacimiento:</label>
            <input class="inputs" type="date" name="" value="01/01/1900">
          </div>
          <div>
            <label for="">País de nacimiento:</label>
            <select class="inputs" name="pais">
              <option value="ar">Argentina</option>
              <option value="ur">Uruguay</option>
              <option value="ch">Chile</option>
              <option value="br">Brasil</option>
              <option value="bo">Bolivia</option>
            </select>
          </div>
          <div>
            <label for="">Género:</label>
            <select class="inputs" name="genero">
              <option value="fe">Femenino</option>
              <option value="ma">Masculino</option>
              <option value="ot">Otro</option>
            </select>
          </div>
          <div>
            <label for="">Email:</label>
            <input class="inputs" type="email" name="" value="email@example.com">
          </div>
          <div>
            <label for="">Cambiar contraseña:</label>
            <input type="checkbox">
          </div>
          <div>
            <button type="button" name="button">Editar Información</button>
          </div>
        </form>
      </div>
    </div>

    <footer class="mi-footer">
      <ul>
        <li>
          <a class="social" href="#" target="_blank">
            <i class="fab fa-facebook-square"></i>
             lienisjpn
          </a>
          <a class="social" href="#" target="_blank">
            <i class="fab fa-instagram"></i>
             lienis.s.designs
          </a>
        </li>
      </ul>
    </footer>
  </body>
</html>
