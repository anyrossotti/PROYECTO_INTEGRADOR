<?php
function validarRegistro() {
  $errores= [];

$datos = [
$nombre = trim($_POST["nombre"]),
$apellido = trim($_POST["apellido"]),
$fechaNac =  $_POST["fechanac"],
$email =  trim($_POST["email"]),
$pass =  trim($_POST["pass"]),
$rtasecreta =  trim($_POST["rtaSecreta"]),
$pais =  $_POST["pais"],
];

// Falta avatar, agregar aca o en el perfil del usuario

//
if (empty($nombre)) {
  $errores["inNombre"] = "El nombre no puede estar vacío.";
}


if (empty($apellido)) {
  $errores["inApellido"] = "El apellido no puede estar vacío.";
}


if (empty($email)) {
  $errores["inEmail"] = "El E-mail no puede estar vacío.";
  }

// Si no ingresa el formato requerido con @
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errores["inEmail"] = "El formato no corresponde a un E-mail.";
  }
    elseif (emailExist($email)) {
    $errores["inEmail"] = "Este E-mail ya se encuentra registrado.";
  }

// Errores con contraseña, no puede estar vacia, ni tener menos de 5 caracteres
if (empty($pass)) {
  $errores["inPass"] = "La contraseña no puede estar vacía.";
}
 elseif ((strlen($pass)) < 5) {
$errores["inPass"] = "La contraseña debe contener al menos 5 letras.";
}
// FALTA QUE LA CLAVE TENGA DH

// Hay que elegir una opcion de Pais
if (empty($pais)) {
  $errores["inPais"] = "Tenés que elegir un País.";
}

// Completar el campo de respuesta secreta
if (empty($rtasecreta)) {
  $errores["inRtaSecreta"] = "Este campo no puede estar vacío.";
}





}
 ?>
