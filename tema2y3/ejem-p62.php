<?php
   $numeros=array('cero','uno','cero'=>0,'uno'=>1);
   echo 'Primera sintaxis:<br/>';
   foreach($numeros as $numero){
      echo "$numero<br>";
   }
   echo "<br>";
   echo 'Segunda sintaxis:<br/>';
   foreach($numeros as $clave => $numero){
      echo "$clave => $numero<br>";
   }
   echo "<br>";
   echo 'a Matriz dos dim:<br/>';
   $array = [[1,2],[3,4]];
   foreach($array as list($a, $b)){
      echo "A:$a;B:$b<br/>";
   }
   echo "<br>";
   echo 'b Matriz dos dim :<br/>';
   foreach($array as list($a)){
      echo "A:$a<br/>";
   }
   echo "<br>";
   echo 'c Matriz dos dim:<br/>';
   foreach($array as list($a, $b, $c)){
      echo "A:$a;B:$b;C:$c<br/>";
   }

   $string = "Este es un Estado de Estados Unidos"; 
   echo "La cuenta es: " . preg_match_all("/este|esto|esta/i", $string); 