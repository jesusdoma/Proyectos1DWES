<?php
   $un_bool = true; // un valor booleano
   $un_str = "Hola"; // una cadena
   $un_str2 = 'Hola'; // una cadena
   $un_int = 12;// un entero

   echo gettype($un_bool); // imprime: boolean
   echo gettype($un_str); // imprime: string
   // Si este valor es un entero, incrementar lo en cuatro
   if (is_int($un_int)){
      $un_int += 4;
   }
   // Si $bool es una cadena, imprimirla
   // (no imprime nada)
   if (is_string($un_bool)){
      echo "Cadena: $un_bool";
}