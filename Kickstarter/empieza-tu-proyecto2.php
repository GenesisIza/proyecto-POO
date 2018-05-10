
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/logo3.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Kickstarter</title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/signin.css">
  </head>
  <body>
    <?php include 'Plantillas/headerEmpieza.php';?>
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center textInicios">
           <h3 class= "primero">Describe lo que estás creando.</h3><br>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center textInicios">
           <h4 class= "segundo">No te preocupes - puedes modificarlo más adelante.</h4><br>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 col-center">
          <input id="texa" name="texa" class="texa form-control " type="texarea" name="" value="" placeholder="Un juego de targetas, papel, sobras hechos a mano" ><br><br>
        </div>
      </div>
<hr>
      <div class="row">
          <div class="col-xl-2   col-lg-2  col-md-2  col-sm-12 col-12 col-center">
            <a href="empieza-tu-proyecto1.php" class="empieza"> ← Categoria</a>
          </div>
          <div class="col-xl-2   col-lg-3  col-md-3  col-sm-12 col-12 col-center">
            <form action="empieza-tu-proyect3.php">
               <input id="btn-descripcion" disabled="disabled" class="btn btn-dark btn1" type="submit" value="Siguiente: Ubicacion" type="button" />
            </form>
          </div>
         </div>



    </div>

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
  </html>
