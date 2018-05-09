  
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
          <h3 class="primero">Primero hay que definir tu proyecto</h3>
        </div>
      </div><br>
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center textInicios">
          <h4 class="segundo">Escoge una categoría para que puedas llegar a la audiencia deseada.</h4>
        </div>
      </div><br>
  <form action="empieza-tu-proyecto2.php"> 
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 col-center">
          <div id="probando"></div>
           <select id="slc-categoria"  class="forma form-control col-center">
              <option value="">Selecione su categoria</option>
             <!-- <option value="1">Arte</option>
              <option value="2">Artesanias</option>
              <option value="3">Cine y videos</option>
              <option value="4">Comisc</option>
              <option value="5">Comida</option>
              <option value="6">Diseño</option>
              <option value="7">Juegos</option>
              <option value="8">Modas</option>
              <option value="9">Musica</option>
              <option value="10">Periodismo</option>
              <option value="11">Publicaciones</option>
              <option value="12">Teatro</option>
              <option value="13">Tecnología</option>-->
           </select>

           <div class="invalid-feedback">Campo Obligatorio</div>
           <br><br><br>
           <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12  " ></div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12  col-center" >     
               <input type="submit"  id="categoria" class="btn btn-dark btn1" value="Siguiente: Idea para el proyecto">
        </div>
      </div>

    </form>  
    </div>
   
  <script src="js/jquery-3.3.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>
  </body>
  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
