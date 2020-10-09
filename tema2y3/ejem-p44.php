<?php
   $str = "Esto es una cadena"; /* Asignando una cadena. */
   $str = $str . " con algo más de texto"; /* Añadiendo a la cadena. */
   /* Otra forma de añadir, incluye un carácter de nueva línea protegido. */
   $str .= " Y un carácter de nueva línea al final.\n";
   /* Esta cadena terminará siendo '<p>Número: 9</p>' */
   echo $str . '<br/>';
   $num = 9;
   $str = "<p>Número: $num</p>";
   /* Esta será '<p>Número: $num</p>' */
   echo $str . '<br/>';
   $num = 9;
   $str = '<p>Número: $num</p>';
   echo $str . '<br/>';
   /* Obtener el primer carácter de una cadena*/
   $str = 'Esto es una prueba.';
   $first = $str[0];
   echo $first . '<br/>';
   /* Obtener el último carácter de una cadena. */
   $str = 'Esto es aún una prueba';
   $last = $str[strlen($str)-1];
   echo $last . '<br/>';

   $x = "hola";
   echo "$x en mayúsculas es strtoupper(\$x)<br/>";
   echo "$x en mayúsculas es " . strtoupper($x). ".";
