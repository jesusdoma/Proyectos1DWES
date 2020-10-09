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