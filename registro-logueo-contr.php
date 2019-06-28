<?php

function validar_pass($pass,&$error_pass){
   if(strlen($pass) < 5){
      $error_pass= "La clave debe tener al menos 5 caracteres";
      return false;
   }
   if(strlen($pass) > 12){
      $error_pass= "La clave no puede tener más de 12 caracteres";
      return false;
   }
   if (!preg_match('`[DH]`',$pass)){
      $error_pass= "La clave debe tener las letras DH (en mayusculas) en su contenido";
      return false;
   }
   if (!preg_match('`[a-zA-Z]`',$pass)){
      $error_pass= "La clave debe tener al menos una letra minúscula o mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$pass)){
      $error_pass= "La clave debe tener al menos un caracter numérico";
      return false;
   }
   if (trim($pass)){
      $error_pass= "La clave no puede contener espacios.";
      return false;
   }
   $error_pass="";
   return true;
}


//faltaria setear para que no contenga espacios en blanco

if ($_POST){
   $error_encontrado="";
   if (validar_pass($_POST[" pass  "], $error_encontrado)){
      echo "PASSWORD VÁLIDO";
   }else{
      echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
   }
}


?>
<P>
<form action="validar-password.php" method="post">
Escribe una clave:
<input type=password name="clave">
<input type="submit" value="Enviar">



 ?>
