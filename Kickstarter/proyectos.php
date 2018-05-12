   <!DOCTYPE html>
   <html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="icon" type="image/png" href="img/logo3.png">
       <title>Kickstarter</title>
       <link rel="stylesheet" href="css/fontawesome-all.min.css">
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="css/estilos.css">
       <link rel="stylesheet" href="css/signin.css">
   </head>
  <body>
    <?php
    session_start();
      if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"])){
          include ("Plantillas/Header.php");
      }else {
          include 'Plantillas/HeaderReguistrado.php';
      }
      ?>
    <br><br>
    <div class="container-fluid">
      <br><h4>Nuevos y Destacados</h4>
      <br>
      <br>
      <hr style="border: 0.4px solid gray;">
      <div class="row" id="proyectoscategorias">

      </div>

    </div>

     <?php include 'Plantillas/footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
</html>
