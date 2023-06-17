<html>
  <head>
    <title>Formulario</title>
      <link rel="stylesheet" href="form.css">
  </head>
  <body>
    
    <br> <hr> <center> <h1> <?php echo '<p>Nettflix</p>'; ?> </h1> </center>
    <h2 style= "text-align: left; color:white"> Registrarse </h2>
        <form action="action.php" method="post">
      <h3>  <center><p>Nombre: <br> <br><input type="text" name="nombre" required/></p>
        <p>Apellido paterno: <br> <br><input type="text" name="Paterno" required/></p>
        <p>Apellido materno<br> <br><input type="text" name="Materno" required /></p>
        <p>Correo electrónico<br> <br><input type="email" name="correo" required /></p>
        Numero de teléfono<br> <br><input type="text" name="cel" required /></p>
         <p> <br><input type="submit" style="font-size: 18px" /></p> </center> </h3>
          
          <p> <h5> <a style="text-decoration:none; color:white; text-align: left; font-family: arial;" href= "index.php"   > Atrás</a> </h5>
            <hr>
            
        </form>
          
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>