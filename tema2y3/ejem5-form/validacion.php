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
?>
      <div class="card">
         <div class="card-header">
         Valores obtenidos mediante el formulario
         </div>
      <div class="card-body">
         <p class="card-text"><?php echo "<strong>Nombre:</strong> " . $nombre . "<br/>";?></p>
         <p class="card-text"><?php echo "<strong>Apellidos:</strong> " . $apellidos . "<br/>";?></p>
         <p class="card-text"><?php echo "<strong>Interés:</strong> " . $interes . "<br/>";?></p>
      </div>
      </div>
<?php
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