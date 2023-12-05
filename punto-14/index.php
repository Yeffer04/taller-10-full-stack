<?php
  include "./passwordCheck.php";
  // Datos de entrada
  $user = "";
  $password = "";

  //Proceso
  echo "Digite usuario a registrar \n";
  $user = readline();
  echo "Digite contraseña a registrar \n";
  $password = readline();

  if(hasSecurityLong ($password)) {
     if(hasUpperLetter ($password)) {
       if(hasNumber ($password)) {
      echo "Su contraseña es segura. \n";
       } else {
         echo "Su contraseña no cumple con números. \n";
       } 
    } else {
      echo "Su contraseña no cumple con letras mayúscula. \n";
    }
  } else {
    echo "Su contraseña no culple con la longitud segura. \n";
  }


?>