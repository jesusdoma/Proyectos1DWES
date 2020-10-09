<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario de ejemplo
  </title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <?php
  
   function filtrado($datos){
      $datos = trim($datos); //Elimina espacios antes y después de los datos
      $datos = stripslashes($datos); //Elimina backslashes\
      $datos = htmlspecialchars($datos); //Traduce caracteres especiales en entidades HTML
      return $datos;
   }

   //Validación de datos
   if (isset($_POST["submit"])) {
      $nombre=filtrado(($_POST["nombre"]));
      if (!empty($nombre)) {
         echo "El nombre introducido es " . $nombre .'<br/>';
      } else {
         echo "El nombre introducido no es válido :(" .'<br/>';
      }

      //$apellidos=filtrado(($_POST["apellidos"]));
      //Podemos usar filter_var
      $apellidos=filter_var(($_POST["apellidos"]),FILTER_SANITIZE_STRING);
      if (!empty($apellidos) && strlen($apellidos)<15 && (!preg_match("/[0-9]/", $_POST["apellidos"]))) {
         echo "Los apellidos introducidos son " . $apellidos .'<br/>';
      } else {
         echo  "Los apellidos son vacíos o tienen más de 15 caracteres o tienen algún número:(" .'<br/>';
      }

      //Selección obligatoria de algo
      echo "Su interés es :" . $_POST["interes"] .'<br/>';
      
   }

   ?>
   <h1>Datos personales</h1>
   <!-- Si el formulario es autoprocesado podemos usar $_SERVER['PHP_SELF'] -->
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <p><label>Escriba su nombre: <input type="text" name="nombre" size="20" maxlength="15" <?php echo "value='" . @$nombre . "'"; ?>></label></p>      
      <p><label>Escriba sus apellidos: <input type="text" name="apellidos" size="40" maxlength="20" <?php if(isset($apellidos)){echo "value='$apellidos'";} ?>></label></p>
      <p>
      Indique si cuál es su interés preferido:
      <select name="interes">
        <option value="0" selected>Natación</option>
        <option value="1">Tenis</option>
        <option value="2">Fútbol</option>
        <option value="3">Baloncesto</option>
        <option value="4">Karate</option>
      </select>
    </p>
      <p>
         <input type="submit" value="Enviar" name="submit">
      </p>
   </form>
</body>
</html>