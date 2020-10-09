<div class="container">
   <h1>Datos personales</h1>  
   <!-- Si el formulario es autoprocesado podemos usar $_SERVER['PHP_SELF'] -->
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group">
         <label for="nombre">Escriba su nombre: </label>
         <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombreHelp" placeholder="Entrar nombre" <?php echo "value='" . @$nombre . "'"; ?>>
         <small id="nombreHelp" class="form-text text-muted">Introduzca su buen nombre</small>
         <?php echo mostrar_error($errors, "nombre"); ?>
      </div>

      <div class="form-group">
            <label for="apellidos">Escriba sus apellidos: </label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Entrar apellidos"
            <?php if(isset($apellidos)){echo "value='$apellidos'";} ?>>
            <?php echo mostrar_error($errors, "apellidos"); ?>
      </div>
   
      <div class="form-group">
      <label for="interes"> Indique si cuál es su interés preferido:</label>
         <select class="form-control" id="interes" name="interes">
            <option value="0" <?php if($interes==0){ echo "selected='selected'"; } ?>>Natación</option>
            <option value="1" <?php if($interes==1){ echo "selected='selected'"; } ?>>Tenis</option>
            <option value="2" <?php if($interes==2){ echo "selected='selected'"; } ?>>Fútbol</option>
            <option value="3" <?php if($interes==3){ echo "selected='selected'"; } ?>>Baloncesto</option>
            <option value="4" <?php if($interes==4){ echo "selected='selected'"; } ?>>Karate</option>
         </select>
      </div>
   
      <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
   </form>
   <?php echo validez($errors); ?>
   <?php if (isset($_POST["submit"]) && (count($errors) == 0)) { valoresfrm(); } ?>
</div>