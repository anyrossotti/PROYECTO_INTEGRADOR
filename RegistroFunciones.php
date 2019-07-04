<?php
session_start();

if ( isset($_COOKIE['email']) ) {
	$usuario = getUserByEmail($_COOKIE['email']);
	$_SESSION['userLogged'] = $usuario;
}
	function validarRegistro() {
		$errores = [];

		$nombre = trim($_POST['nombre']);
		$usuario = trim($_POST['usuario']);
		$fecha = $_POST['fecha'];
		$email = trim($_POST['email']);
		$password = trim($_POST['pass']);
		$rePassword = trim($_POST['rePass']);
		$paises = $_POST['pais'];
		$avatar = $_FILES['avatar'];

		if ( empty($nombre) ) {
			$errores['nombre'] = 'El campo nombre no puede estar vacío';
		}
		if ( empty($usuario) ) {
			$errores['usuario'] = 'El campo usuario no puede estar vacío';
		} elseif ( usuarioExist($usuario) ) {
			$errores['usuario'] = 'Ese usuario ya esta registrado';
		}
		if ( empty($fecha) ) {
			$errores['fecha'] = 'Debes ingresar una fecha de nacimiento';
		}
		if (empty($email)) {
			$errores['email'] = 'El campo correo electrónico es obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			echo "aasd";
			$errores['email'] = 'Escribí un formato de correo válido';
		} elseif ( emailExist($email) ) {
			$errores['email'] = 'Ese email ya esta registrado';
		}

		if (empty($password)) {
			$errores['pass'] = 'La contraseña no puede estar vacía';
		} elseif (preg_match("/DH/", $password) == 0){
			$errores['pass'] = 'La contraseña debe contener la sigla DH';
		} elseif (strpos($password, " ")){
			$errores['pass'] = 'La contraseña no puede contener espacios';
		}	elseif (strlen($password) < 5) {
			$errores['pass'] = 'La contraseña debe tener al menos 5 caracteres';
		}

		if (empty($rePassword)) {
			$errores['rePass'] = 'Debes escribir la contraseña de nuevo';
		} elseif ( $password != $rePassword ) {
			$errores['rePass'] = 'Las contraseñas no coinciden';
		}
					if (empty($paises)) {
				$errores['pais'] = 'Elegí un país de nacimiento';
			}

		if ($avatar['error'] != UPLOAD_ERR_OK) {
			$errores['avatar'] = 'Debes subir una imagen';
		} else {

			$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
			if ( $ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
				$errores['avatar'] = 'Las extensiones permitidas son JPG, PNG, GIF y JPEG';
			}
		}
		return $errores;

}



	function guardarUsuario() {
		$listaDeUsuarios = getAllUsers();
		unset($_POST['rePass']);
		$_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		$listaDeUsuarios[] = $_POST;
		file_put_contents('data/usuarios.json', json_encode($listaDeUsuarios, JSON_PRETTY_PRINT));
	}

	function emailExist($email) {
		$losUsuarios = getAllUsers();
		foreach ($losUsuarios as $unUsuario) {
			if ($unUsuario['email'] == $email) {
				return true;
			}
		}
		return false;
		}


		function usuarioExist($usuario) {
					$losUsuarios = getAllUsers();
					foreach ($losUsuarios as $unUsuario) {
						if ($unUsuario['usuario'] == $usuario) {
							return true;
						}
					}
					return false;
					}

	function getAllUsers() {
		return  json_decode(file_get_contents('data/usuarios.json'), true);
	}

	function guardarImagen($archivo) {
		$nombreImg = $archivo['name'];
		$ext = pathinfo($nombreImg, PATHINFO_EXTENSION);
		$final = 'avatars/' . uniqid('img-') . "." . $ext;
		$tempFile = $archivo['tmp_name'];
		move_uploaded_file($tempFile, $final);
		return $final;
	}


	function ValidarLogin() {
		$errores = [];
		$email = trim($_POST['email']);
		$password = trim($_POST['pass']);
		if (empty($email)) {
			$errores['email'] = 'El campo correo electrónico es obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$errores['email'] = 'Escribí un formato de correo válido';
		} elseif (!emailExist($email)) {
			$errores['email'] = 'Ese usuario no está registrado';
		} else {
			$elUsuario = getUserByEmail($email);
			if (!password_verify($password, $elUsuario['pass'])) {
				$errores['pass'] = 'La contraseña no es correcta';
			}
		}
		if ( empty($password) ) {
			$errores['pass'] = 'La contraseña no puede estar vacía';
		}
	 	return $errores;
	}

	function getUserByEmail($email) {
		$losUsuarios = getAllUsers();

		foreach ($losUsuarios as $unUsuario) {
			if ($unUsuario['email'] == $email) {
				return $unUsuario;
			}
		}
		return false;
	}

	function login($usuarioALoguear) {
		unset($usuarioALoguear['pass']);
		$_SESSION['userLogged'] = $usuarioALoguear;
		header('location: perfil_usuario.php');
		exit;
	}

	function isLogged() {
		return isset($_SESSION['userLogged']);
	}
