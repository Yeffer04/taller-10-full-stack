<?php
 //Datos de entrada
  $name = " ";
  $age = " ";

  //Proceso
 echo "digite su nombre porfavor \n";
   $name = readline();
 echo "digite su edad porfavor \n";
  $age = readline();

if ($age < 18) {
  echo "Hola $name, usted es menor de edad por lo tanto no puede 
ingresar \n";
} else if ($age >= 18) {
  echo "Hola $name, usted es mayor de edad por lo tanto puede ingresar \n";
}

?>