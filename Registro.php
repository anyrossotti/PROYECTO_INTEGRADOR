<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<link rel="stylesheet" href="css/registro.css">
		<link rel="stylesheet" href="css/inicio.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
	<body>

		<div class="contenedor">
			<!-- header -->

			<header class="cabecera-ppal">
				<ul class="navbar-ppal">
					<li><a href="inicio.php">Inicio</a></li>
					<li><a href="PregFrecuentesF.php">Faq</a></li>
									</ul>

				<ul class="navbar-login">
					<li><a href="Login.php">Login</a></li>
				</ul>
			</header>

			<!-- Logo -->
			<?php require_once "_logo.php" ?>

      <section>
        <article class="formulario">
<h1>Registrate!</h1>

			<!-- agregar require once de datos registros -->

<form action="Registro.html" method="post">
  <label for="nombre" type="nombre">Nombre</label>
  <br>
<input class="uno" type="text" name="nombre" placeholder="Ingresá tu nombre" required value="<?=$nombre?>">
<label for="nombre" type="apellido">Apellido</label>
<input class="uno" type="text" name="apellido" placeholder="Ingresá tu apellido" required value="<?=$apellido?>">
<label for="fecha" type="fecha">Fecha de Nacimiento</label>
<input class="uno" type="date" name="fechanac"  required value="<?=$fechaNac?>">
<label for="email" type="email">Email</label>
<input class="uno" type="email" name="email" placeholder="Ingresá tu email" required value="">
<label for="pass" type="pass">Contraseña</label>
<input class="uno" type="password" name="pass" placeholder="Password" required value="" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*">
<label for="pass" type="pass"> Repetir contraseña</label>
<input class="uno" type="password" name="pass" placeholder="Password" required value="">
<label for="pregunta" type="pregunta">Pregunta Secreta</label>

<select name="pregunta">
<option value="">Elegí una pregunta</option>
<option value="pareja">¿Cuál es nombre de tu primer/a novio/a?</option>
<option value="vehículo">¿Cuál era el modelo de tu primer vehículo?</option>
<option value="mascota">¿Cuál era el nombre de tu primera mascota?</option>
<option value="equipo">¿Cuál es tu equipo de fútbol favorito?</option>
<option value="colegio">¿Cuál es el nombre de tu primer colegio?</option>
</select>

<input class="uno" type="text" name="rtaSecreta" placeholder="Respuesta Secreta" required value="">
<label class="pais" for="pais">País de Nacimiento</label>

<select name="pais" required>
<option value="">Elegí un País</option>
<option value="Ar">Argentina</option>
<option value="Br">Brasil</option>
<option value="Cl">Chile</option>
<option value="Co">Colombia</option>
</select>
<br>
<label class="genero" for="genero">Género</label>
<input type="radio" name="genero" required>Masculino
<input type="radio" name="genero" required>Femenino
<input type="radio" name="genero" required>Otro
<br>
<label for="acepto"></label>
<input type="checkbox" name="acepto" required>  Acepto los términos y condiciones.
<br>
<button class="registro" type="submit" name="Registrarme"><b>Registrarme</b></button>
<button class="cancelar" type="reset" name="Cancelar">Cancelar</button>
</form>
        </article>
      </section>

<?php require_once "_footer.php" ?>

	</body>
</html>
