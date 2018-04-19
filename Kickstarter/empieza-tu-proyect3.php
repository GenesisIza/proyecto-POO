 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta name="description" content="">
    <meta name="author" content="">
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
    <?php include 'Plantillas/header.php';   ?>
    <div class="formulario ">
    <h3 id="primero">Pare terminar, comprobemos tu elegibilidad:</h3>
    <h4 id="segundo">Antes de que procedamos, por favor confirma unos cuantos detalles e <br> indícanos donde resides principalmente.</h4>
    <br><br>
    <form class="" action="registrarse.php" method="post">
          <select class="forma form-control form-control-lg">
              <option value="0">Selecione su pais</option>
              <option value="1">Honduras</option>
              <option value="2">guatemala</option>
              <option value="3">estado unidos</option>
              <option value="4">españa</option>
              <option value="5">polonia</option>
              <option value="6">portugal</option>
              <option value="">brazil</option>
              <option value="">nicaragua</option>
              <option value="">mexico</option>
              <option value="">canada</option>
              <option value="">suiza</option>
              <option value="">peru</option>
              <option value="">Argentina</option>
          </select>
          <a class="empieza" href="#"> <div class="pregunta"><i class="far fa-question-circle texto">¿Y si mi país no aparece en la lista?</i></div> </a>                     
          <br>
          <div class=" texto-final">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 texto-final" style="text-align: right;">
                       <input name="chk-gustos[]" type="checkbox" id="edad"><br>
                       <input name="chk-gustos[]" type="checkbox" id="cuenta"><br>
                       <input name="chk-gustos[]" type="checkbox" id="tarjeta"><br>
                    </div>   
                    <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-4 ">
                       <label id="edad">Tengo al menos 18 años</label>
                       <label id="cuenta">Tengo una cuenta bancaria y una identificacion oficial</label>
                       <label id="tarjeta">Tengo una tarjeta de credito y/o debito</label>
                    </div>
                </div>
              </div>
         </div>
         <a href="empieza-tu-proyecto1.php" class="empieza"> ← idea para el proyecto</a>
         <a href="registrarse.php"> <button type="button" class="btn btn-dark btn1">Continuar</button></a>
      </div>
      
    <form/>
    <br><br><hr> 
    
 </div>
   
 </body>
 </html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  

  