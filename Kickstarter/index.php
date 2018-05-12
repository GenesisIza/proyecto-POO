    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/logo3.png">
    <title>Kickstarter</title>
    <link rel="stylesheet" href="css/colorbox.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">
   </head>
    <body>
      <?php
        if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"])){
            include 'Plantillas/Header.php';
        }else {
            include 'Plantillas/HeaderReguistrado.php';
        }
       ?>


	<div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"  data-interval="50">
      <img class="d-block w-100 imagenesLanding" src="img/landing.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imagenesLanding" src="img/landing1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imagenesLanding" src="img/landing2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imagenesLanding" src="img/landing3.jpg" alt="Third slide">

    </div>
  </div>
  <a class="btn btn-primary" href="Principal.php" role="button">Ir a pagina Principal</a>

 <script src="js/jquery.min.js"></script>
  <script src="js/jquery.colorbox-min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/controlador.js"></script>
</body>
</html>
