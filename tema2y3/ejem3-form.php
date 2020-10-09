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

   // Definimos e inicializamos el array de errores y las variables asociadas a cada campo
   $errors    = [];
   $nombre    = "";
   $apellidos = "";
   $interes = "0";

   function filtrado($datos){
      $datos = trim($datos); //Elimina espacios antes y después de los datos
      $datos = stripslashes($datos); //Elimina backslashes\
      $datos = htmlspecialchars($datos); //Traduce caracteres especiales en entidades HTML
      return $datos;
   }

   // Función que muestra el mensaje de error bajo el campo que no ha superado
   // el proceso de validación
   function mostrar_error($errors, $campo) {
      $alert = "";
      if (isset($errors[$campo]) && (!empty($campo))) {
         $alert = '<div class="alert alert-danger" style="margin-top:5px;">' . $errors[$campo] . '</div>';
      }
      return $alert;
   }

    // Verificamos si todos los campos han sido validados
    function validez($errors) {
      if (isset($_POST["submit"]) && (count($errors) == 0)) {
         return '<div class="alert alert-success" style="margin-top:5px;"> Formulario validado correctamente!! :)</div>';
      }
   }

   // Visualización de las variables obtenidas mediante el formulario
   function valoresfrm() {
      global $nombre,$apellidos,$interes;
      echo "<h4>Valores obtenidos mediante el formulario</h4>";
      echo "<strong>Nombre:</strong>" . $nombre . "<br/>";
      echo "<strong>Apellidos:</strong>" . $apellidos . "<br/>";
      echo "<strong>Interés:</strong>" . $interes . "<br/>";
   }

   //Validación de datos
   if (isset($_POST["submit"])) {
      $nombre=filtrado(($_POST["nombre"]));
      if (empty($nombre)) {
         $errors["nombre"] = "El nombre introducido no es válido :(";
      }

      //$apellidos=filtrado(($_POST["apellidos"]));
      //Podemos usar filter_var
      $apellidos=filter_var(($_POST["apellidos"]),FILTER_SANITIZE_STRING);
      if (empty($apellidos) || strlen($apellidos)>15 || (preg_match("/[0-9]/", $_POST["apellidos"]))) {
         $errors["apellidos"] = "Los apellidos son vacíos o tienen más de 15 caracteres o tienen algún número:(";
      }
      $interes = filtrado($_POST['interes']);
   }

   ?>
   <h1>Datos personales</h1>
   <?php echo validez($errors); ?>
   <?php if (isset($_POST["submit"]) && (count($errors) == 0)) { valoresfrm(); } ?>
   <!-- Si el formulario es autoprocesado podemos usar $_SERVER['PHP_SELF'] -->
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <p><label>Escriba su nombre: <input type="text" name="nombre" size="20" maxlength="15" <?php echo "value='" . @$nombre . "'"; ?>></label></p>  
      <?php echo mostrar_error($errors, "nombre"); ?>    
      <p><label>Escriba sus apellidos: <input type="text" name="apellidos" size="40" maxlength="20" <?php if(isset($apellidos)){echo "value='$apellidos'";} ?>></label></p>
      <?php echo mostrar_error($errors, "apellidos"); ?>
      <p>
      Indique si cuál es su interés preferido:
      <select name="interes">
        <option value="0" <?php if($interes==0){ echo "selected='selected'"; } ?>>Natación</option>
        <option value="1" <?php if($interes==1){ echo "selected='selected'"; } ?>>Tenis</option>
        <option value="2" <?php if($interes==2){ echo "selected='selected'"; } ?>>Fútbol</option>
        <option value="3" <?php if($interes==3){ echo "selected='selected'"; } ?>>Baloncesto</option>
        <option value="4" <?php if($interes==4){ echo "selected='selected'"; } ?>>Karate</option>
      </select>
    </p>
      <p>
         <input type="submit" value="Enviar" name="submit">
      </p>
   </form>
</body>
</html>