<?php

require_once 'RegistroFunciones.php';

if ( isLogged() ) {
  header('location: perfil_usuario.php');
  exit;
}

$paises = [
  'ar' => 'Argentina',
  'br' => 'Brasil',
  'bo' => 'Bolivia',
  'cl' => 'Chile',
  'co' => 'Colombia',
  'ec' => 'Ecuador',
  'pe' => 'Perú',
  've' => 'Venezuela',
  'ot' => 'Otro',
];

if($_POST){
  $nombrePost = trim($_POST["nombre"]);
  $usuarioPost = trim($_POST["usuario"]);
  $emailPost = trim($_POST["email"]);
  $fechaPost = $_POST["fecha"];
  $paisPost = $_POST["pais"];

  $erroresRegistro = validarRegistro();
  if (!$erroresRegistro) {
    $img = guardarImagen($_FILES['avatar']);
    $_POST['imagenFinal'] = $img;
    guardarUsuario();
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<title>Registro</title>
    </head>
	<body>

		<div class="contenedor">
			<!-- header -->
      <header class="cabecera">
        <nav class="nav-login">
        	<ul>
            <li><a href="login.php"><b>Login</b></a></li>
          </ul>
        </nav>

      	<div class="main-nav">
      		<nav class="main-navv">
      			<ul>
				      <li><a href="inicio.php"><b>Inicio</b></a></li>
				      <li><a href=""><b>Productos</b></a></li>
				      <li><a href="PregFrecuentesF.php"><b>Preguntas Frecuentes</b></a></li>
            </ul>
      		</nav>
				</div>

      	<!-- Logo -->
      	<?php require_once "_logo.php" ?>
      </header>
      <section>
        <article class="formulario">
					<h2>REGISTRATE!</h2>
					<form method="post" enctype="multipart/form-data">
  					<label>Nombre Completo</label>
  					<input class="uno" type="text" name="nombre"  placeholder="Ingresá tu nombre completo"
						value="<?= isset($nombrePost) ? $nombrePost : ''; ?>">
 						<?php if ( isset($erroresRegistro['nombre']) ) : ?>
   					<div class="alert alert-danger">
     					<?= $erroresRegistro['nombre']; ?>
   					</div>
   					<?php endif; ?>

						<label for="nombre" type="usuario">Nombre de Usuario</label>
						<input class="uno" type="text" name="usuario" placeholder="Elegí un nombre de usuario"
						value="<?= isset($usuarioPost) ? $usuarioPost : ''; ?>">
						<?php if ( isset($erroresRegistro['usuario']) ) : ?>
  					<div class="alert alert-danger">
    					<?= $erroresRegistro['usuario']; ?>
  					</div>
  					<?php endif; ?>

						<label for="fecha" type="fecha">Fecha de Nacimiento</label>
						<input class="uno" type="date" name="fecha"
						value="<?= isset($fechaPost) ? $fechaPost : ''; ?>">
						<?php if (isset($erroresRegistro['fecha'])) : ?>
  					<div class="alert alert-danger">
    					<?= $erroresRegistro['fecha']; ?>
  					</div>
  					<?php endif; ?>

						<label for='email' type='text'>E-mail</label>
						<input class="uno" type='text' name='email' placeholder="Ingresá tu email"
						value="<?= isset($emailPost) ? $emailPost : ''; ?>">
						<?php if (isset($erroresRegistro['email'])) : ?>
        		<div class="alert alert-danger">
          		<?= $erroresRegistro['email']; ?>
  					</div>
						<?php endif; ?>

						<label for="pass" type="pass">Contraseña</label>
						<input class="uno" type="password" name="pass" placeholder="Ingresar contraseña">
						<?php if (isset($erroresRegistro['pass'])) : ?>
						  <div class="alert alert-danger">
						    <?= $erroresRegistro['pass']; ?>
						  </div>
						<?php endif; ?>

						<label for="pass" type="pass"> Repetir contraseña</label>
						<input class="uno" type="password" name="rePass" placeholder="Repetir contraseña">
						<?php if (isset($erroresRegistro['rePass'])) : ?>
						  <div class="alert alert-danger">
						    <?= $erroresRegistro['rePass']; ?>
						  </div>
						<?php endif; ?>

						<label class="pais" for="pais">País de Nacimiento</label>
						<br>
						<select name="pais" value="">
							<option value="">Elegí un País</option>
							<?php foreach ($paises as $codigo => $pais): ?>
							  <option
							    value="<?= $codigo ?>"
							    <?= isset($paisPost) && $paisPost == $codigo ? 'selected' : '';  ?>
							  > <?= $pais ?> </option>
							<?php endforeach; ?>
						</select>
						<?php if (isset($erroresRegistro['pais'])) : ?>
						<div class="alert alert-danger">
						<?= $erroresRegistro['pais']; ?>
						</div>
						<?php endif; ?>
						<br>
						<br>

						<label><b>Imagen de perfil:</b></label>
						<input type="file" name='avatar' class="file">
						<?php if (isset($erroresRegistro['avatar'])) : ?>
						  <div class="alert alert-danger">
						    <?= $erroresRegistro['avatar']; ?>
						  </div>
						<?php endif; ?>
						<br>
						<br>

						<button class="registro" type="submit" name="Registrarme" value="">Registrarme</button>
						<button class="cancelar" type="reset" name="Cancelar"value="">Cancelar</button>
					</form>
				</article>
			</section>

<?php require_once "_footer.php" ?>
