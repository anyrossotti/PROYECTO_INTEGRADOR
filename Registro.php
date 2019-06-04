<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<link rel="stylesheet" href="css/registro.css">
    </head>
	<body>

		<div class="contenedor">
			<!-- header -->
			<img src="img\Logo-Lienis.png" alt="logo" class="logo">
			<header class="cabecera-ppal">


				<ul class="navbar-ppal">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="#">Productos</a></li>
					<li><a href="PregFrecuentesF.php">Preguntas Frecuentes</a></li>
				</ul>

				<ul class="navbar-login">
					<li><a href="Login.php">Login</a></li>
				</ul>
			</header>

      <section>
        <article class="formulario">
<h1>REGISTRATE</h1>
<form action="Registro.html" method="post">
  <label for="nombre" type="nombre">Nombre</label>
  <br>
<input class="uno" type="text" name="nombre" placeholder="Ingresá tu nombre" required>
<label for="nombre" type="nombre">Apellido</label>
<br>
<input class="uno" type="text" name="apellido" placeholder="Ingresá tu apellido" required>
<label for="fecha" type="fecha">Fecha de Nacimiento</label>
<input class="uno" type="text" name="dia" placeholder="Día de Nacimiento" required>
<input class="uno" type="text" name="mes" placeholder="Mes de Nacimiento" required>
<input class="uno" type="text" name="año" placeholder="Año de Nacimiento" required>
<label for="email" type="email">Email</label>
<br>
<input class="uno" type="email" name="email" placeholder="Ingresá tu email" required>
<label for="pass" type="pass">Contraseña</label>
<br>
<input class="uno" type="password" name="pass" placeholder="Password" required>
<label for="pass" type="pass"> Repetir contraseña</label>
<br>
<input class="uno" type="password" name="pass" placeholder="Password" required>
<label for="pregunta" type="pregunta">Pregunta Secreta</label>
<br>
<select name="pregunta" required>
<option></option>
<option value="pareja">¿Cuál es nombre de tu primer/a novio/a?</option>
<option value="vehículo">¿Cuál era el modelo de tu primer vehículo?</option>
<option value="mascota">¿Cuál era el nombre de tu primera mascota?</option>
<option value="equipo">¿Cuál es tu equipo de fútbol favorito?</option>
<option value="colegio">¿Cuál es el nombre de tu primer colegio?</option>
</select>
<br>
<input class="uno" type="text" name="pregunta" placeholder="Respuesta Secreta" required>
<label class="pais" for="pais">País de Nacimiento</label>
<br>
<br>
<select name="pais" required>
<option></option>
<option value="Ar">Argentina</option>
<option value="Br">Brasil</option>
<option value="Cl">Chile</option>
<option value="Co">Colombia</option>
</select>
<br>
<br>
<label class="genero" for="genero">Género</label>
<br>
<br>
<input type="radio" name="genero" required>Masculino
<input type="radio" name="genero" required>Femenino
<input type="radio" name="genero" required>Otro
<br>
<br>
<label for="acepto"></label>
<input type="checkbox" name="acepto" required>  Acepto los términos y condiciones.
<br>
<br>
<button class="registro" type="submit" name="Registrarme">Registrarme</button>
<button class="cancelar" type="reset" name="Cancelar">Cancelar</button>
</form>
        </article>
      </section>
