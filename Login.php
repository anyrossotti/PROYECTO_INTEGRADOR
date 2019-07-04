<?php

	require_once 'RegistroFunciones.php';

	if (isLogged()) {
		header('location: perfil_usuario.php');
		exit;
	}

	if ($_POST) {
		$emailPost = trim($_POST['email']);
		$erroresLogin = ValidarLogin();

		if ( !$erroresLogin ) {
			$usuarioALoguear = getUserByEmail($emailPost);
			if ( isset($_POST['Recordarme']) ) {
				setcookie('email', $usuarioALoguear['email'], time() + 3000);
			}
			login($usuarioALoguear);
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
		<title>Login</title>
	</head>
	<body>
		<div class="contenedor">

			<!-- header -->
	    <header class="cabecera">
	    	<nav class="main-nav" style=" margin-top: 25px; padding: 10px;">
					<ul>
			      <li><a href="inicio.php"><b>Inicio</b></a></li>
			      <li><a href=""><b>Productos</b></a></li>
			      <li><a href="pregFrecuentes.php"><b>Preguntas Frecuentes</b></a></li>
	        </ul>
				</nav>

	      <!-- Logo -->
	      <?php require_once "_logo.php" ?>
			</header>
			<section>
				<article class="Formulario">
					<div class="titulo" style="color: RGB(46, 139, 87)";>
						<h2>BIENVENIDO</h2>
					</div>
					<form method="post">
						<div class="mail">
							<label for="email" type="email" value="Email">E-mail</label>
							<br>
							<input class="email" type="text" name="email" placeholder="E-mail"
							value="<?= isset($emailPost) ? $emailPost : null; ?>">
							<?php if ( isset($erroresLogin['email']) ) : ?>
							<div class="alert alert-danger">
							<?= $erroresLogin['email']; ?>
							</div>
							<?php endif; ?>
						</div>
						<div class="pass">
							<label for="pass" type="password">Contraseña</label>
							<br>
							<input class="pass" type="password" name="pass" placeholder="Password">
							<?php if ( isset($erroresLogin['pass']) ) : ?>
							<div class="alert alert-danger">
							<?= $erroresLogin['pass']; ?>
							</div>
							<?php endif; ?>
						</div>
						<br>
						<input class="Recordarme" type="checkbox" name="Recordarme" value="Recordarme">Recordarme
						<br>
						<br>

						<button class="ingresar" type="submit" name="Registrarme" value="Ingresar" style="	background-color: RGB(46, 139, 87);
						font-weight: bold; padding: 7px; margin-top: 10px; margin-bottom: 20px; color: white;">Ingresar</button>

						<br> <br>
						<p>¿Aún no tenés cuenta? <a href="Registro.php">Registrate</a></p style="color: RGB(46, 139, 87)";>
					</form>
				</article>

			</section>
			<?php require_once "_footer.php" ?>

		</div>

	</body>
