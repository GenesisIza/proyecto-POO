  
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
  <body onunload="validar();">
    <?php include 'Plantillas/header.php';   ?>
    <div class="formulario espacio ">
         <h3 id="primero">Primero hay que definir tu proyecto</h3>
         <h4 id="segundo">Escoge una categoría para que puedas llegar a la audiencia deseada.</h4>
         <br><br>
         <form class="" action="empieza-tu-proyecto2.php" method="post">
            <select class="forma form-control form-control-lg" id="slc-categoria">
              <option value="0">Selecione su categoria</option>
              <option value="1">Arte</option>
              <option value="2">Artesanias</option>
              <option value="3">Cine y videos</option>
              <option value="4">Comisc</option>
              <option value="5">Comida</option>
              <option value="6">Diseño</option>
              <option value="">Juegos</option>
              <option value="">Modas</option>
              <option value="">Musica</option>
              <option value="">Periodismo</option>
              <option value="">Publicaciones</option>
              <option value="">Teatro</option>
              <option value="">Tecnología</option>
           </select>
           <br><br>
           <hr>
           <input class="btn btn-dark btn1" type="submit" name="" value="Siguiente:Idea para tu proyecto"  id="btn-idea">
       </form>
  </div>
   <script src="js/jquery-3.3.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>
  </body>
  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
