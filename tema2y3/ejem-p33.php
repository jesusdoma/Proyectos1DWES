<?php
   // Declaración de variables que se utilizarán más adelante.
   // Esta sección de código PHP no genera salida en la página
   $nombre='Pepe Gotera'; // nombre del usuario
   $título_página='Chapuzas a domicilio...'; // título de la página
   $hoy= date("d/m/Y"); // fecha de hoy
   $hora= date("H:i:s"); // hora
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>',"\n"; ?>
<!DOCTYPE html>
   <head>
      <title>
         <?php /* mostrar el título */ echo$título_página; ?>
      </title>
      <meta charset="utf-8">
   </head>
   <body> 
   <p>
      <?php 
         echo "¡Hola <b>$nombre</b>!<br/>"; //Mostrar la fecha y la hora
         echo "Hoy estamos a $hoy; son las $hora.";
      ?>
   </p>
   </body> 
</html>