<html>
   <body>
    <form action="formpost.php" method="post"> 
       Nombre: <input type="text" name="nombre"><br/> 
       Email: <input type="text" name="email"><br/> 
       <input type="submit" value="Enviar"> 
    </form> 
      Hola <?php echo isset($_POST["nombre"])?$_POST["nombre"]:"";?> <br/> 
      Tu email es: <?php echo isset($_POST["email"])?$_POST["email"]:"";?>       
  </body> 
</html>
