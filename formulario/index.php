<html>
  <head>
    <title>Formulario</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <br> <hr> <center> <h1> <?php echo '<p>Nettflix</p>'; ?> </h1> </center>
    <h2 style= "text-align: left; color:white"> Iniciar sesión </h2>
        <form action="accion.php" method="post">
          <h4>
      <h3>  <center><p>Usuario: <br> <br><input type="text" style="font-size: 15px;" name="usuario" required /></p>
        <p>Correo electrónico: <br>  <br><input type="email" style="font-size: 15px;" name="Correo" required /></p>
        <p>Contraseña<br> <br><input type="text" style="font-size: 15px;" name="contraseña" required /></p></h3> </center> 
        
        <br> <center> <p><input type="submit" style="font-size: 18px" /></p> </center>
        
          
          <p> <h5 > <a style= " text-align:right; text-decoration:none; color:white; font-family: arial;" href= "registrar.php"   > Registrarse</a> </h5>
            <hr> 
            
        </form>
          
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>