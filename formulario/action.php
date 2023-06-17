<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="form.css">
  </head>
  <body>
    <center><h3> <br> <hr>DATOS CAPTURADOS <br>
   <br> Nombre: <?php echo htmlspecialchars($_POST['nombre']); ?>.<br>
    <br> Apellido Paterno: <?php echo htmlspecialchars($_POST['Paterno']); ?>.<br>
     <br> Apellido Materno: <?php echo htmlspecialchars($_POST['Materno']); ?><br>
    <br> Correo electronico: <?php echo htmlspecialchars($_POST['correo']); ?>. <br>
    <br> Num de telefono: <?php echo htmlspecialchars($_POST['cel']); ?>. </center><br></h3> <hr>

      <p> <h5> <a style="text-decoration:none; color:white; text-align: left; font-family: arial;" href= "registrar.php"   >  Atrás </a> </h5> 

 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>