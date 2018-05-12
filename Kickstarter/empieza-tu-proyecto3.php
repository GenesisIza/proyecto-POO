
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="img/logo3.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <title>Kickstarter</title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
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

     <br><br><br>
     <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center textInicios">
            <h3 class="primero">Pare terminar, comprobemos tu elegibilidad:</h3><br>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center textInicios">
            <h4 class="segundo">Antes de que procedamos, por favor confirma unos cuantos detalles e <br> indícanos donde resides principalmente.</h4><br>
          </div>
        </div>

        <div class="row">
          <div  class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 col-center">
              <select name="texp" id="texp" class="forma form-control col-center">
              <option value="0">Selecione su pais</option>
           <!--   <option value="1">Honduras</option>
              <option value="2">guatemala</option>
              <option value="3">estado unidos</option>
              <option value="4">españa</option>
              <option value="5">polonia</option>
              <option value="6">portugal</option>
              <option value="7">brazil</option>
              <option value="8">nicaragua</option>
              <option value="9">mexico</option>
              <option value="10">canada</option>
              <option value="11">suiza</option>
              <option value="12">peru</option>
              <option value="13">Argentina</option>-->
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 col-center ">
           <a class="empieza" href="#"> <div><i class="far fa-question-circle texto">¿Y si mi país no aparece en la lista?</i></div></a>
          <br>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 texto-final col-center">
            <div onclick="validarChecks('bn1');">
              <label class="divCheck">
                <img src="img/success.svg"  id="bn1" class="iconos-check">
                Tengo al menos 18 años
              </label>
            </div><br>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 col-lg-11 col-md-11 col-sm-12 col-12 texto-final col-center">
            <div  onclick="validarChecks('bn2');">
              <label class="divCheck">
                <img src="img/success.svg" id="bn2" class="iconos-check">
                Tengo una cuenta bancaria y una identificacion oficial
              </label>
            </div><br>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 texto-final col-center">
            <div  onclick="validarChecks('bn3');">
              <label class="divCheck">
                <img src="img/success.svg" id="bn3" class="iconos-check">
                Tengo una tarjeta de credito y/o debito
              </label>
            </div><br>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-3   col-lg-3  col-md-3  col-sm-12 col-12 col-center">
            <a href="empieza-tu-proyecto2.php" class="empieza"> ← idea para el proyecto</a>
          </div>
          <div class="col-xl-2   col-lg-3  col-md-3  col-sm-12 col-12 col-center">
            <form action="creandoProyecto.php">
               <input id="btn-pais" class="btn btn-dark btn1" type="submit" disabled="disabled" value="Continuar" type="button"   />
            </form>
          </div>
         </div>
    </div>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>

 </body>
 </html>
