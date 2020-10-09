<?php
   if (isset($_GET['nombre']) && isset($_GET['apellido'])) {
      echo "El apellido recibido es:" .  $_GET['apellido'] . "<br />";
      echo "El nombre recibido es:" .  $_GET['nombre']  .  "<br />";
   }else{ 
      echo "El nombre o el apellido no se especificaron :(";  
   }
?>