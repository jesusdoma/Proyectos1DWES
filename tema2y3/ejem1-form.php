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
    
   //if (isset($_POST["submit"])) {
      if (!empty($_POST["nombre"])) {
         echo "El nombre introducido es " . trim($_POST["nombre"]) .'<br/>';
      } else {
         echo "El nombre introducido no es válido :(" .'<br/>';
      }

      if (!empty($_POST["apellidos"])) {
         echo "Los apellidos introducidos son " . trim($_POST["apellidos"]) .'<br/>';
      } else {
         echo  "Los apellidos introducidos no son válidos :(" .'<br/>';
      }

      //Selección obligatoria de algo
      if(isset($_POST["interes"])){
         echo "Su interés es :" . $_POST["interes"] .'<br/>';
      }
   //}

   ?>
   <h1>Datos personales</h1>
  
   <form action="ejem1-form.php" method="post">
      <p><label>Escriba su nombre: <input type="text" name="nombre" size="20" maxlength="15"></label></p>      
      <p><label>Escriba sus apellidos: <input type="text" name="apellidos" size="40" maxlength="20"></label></p>
      <p>
      Indique si cuál es su interés preferido:
      <select name="interes">
        <option value="0">Natación</option>
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