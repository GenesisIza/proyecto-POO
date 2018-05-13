
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
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis|Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" href="css/signin.css">
  </head>
<body>
  <?php
  session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"])){
        include 'Plantillas/Header.php';
    }else {
        include 'Plantillas/HeaderReguistrado.php';
    }
   ?>
   <br>
   <div class="container">
       <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6">
           <h3> Convierte tu proyecto <br> creativo en realidad.</h3><br>
           <form class="" action="empieza-tu-proyecto1.php" method="post">
               <input  class=" btn btn-success inicio1 " type="submit" value="Empieza tu proyecto" >
            </form>
         </div>
       </div>
  </div>



    <div class="contenedor imagenes  ">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
             <img style="padding :5px;" class="img-fluid" src="img/img1.png" alt="">
          </div>
           <div  class="col-lg-6  col-md-6 col-sm-12 ">
             <img style="padding :10px;" class="img-fluid" src="img/img2.png" alt="">
             <img style="padding :10px;" class="img-fluid" src="img/img3.png" alt="">
          </div>
      </div>
    </div>

<section class="parrafos" >
       <section class="anuncio">
         <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="aqua">
                  We see Kickstarter as a home for creative minds<br> and a wonderful platform; where people who<br> believe, respect, and see the vision can support an<br> idea and make it a reality..<br><br>
               </h3>
               <h6>— DE LA SOUL</h6>
              </div>
            </div>
         </div>
       </section>
       <br><br><br>
       <div class="container">
           <div class="col-lg-10 col-md-10 col-sm-12 col-center">
              <h3  class="pagBegin" style="font-size: 30px;" >Un proyecto de Kickstarter hace mucho<br> más que simplemente recaudar dinero.<br>  Genera una comunidad en torno a tu <br>trabajo.</h3>
           </div>
       </div>
       <br><br><br>
       <div class="container ">
            <div class=" row">
               <div class="col-lg-3 col-md-6 col-sm-12 col-center">
                  <h4 class="pagBegin">¿Qué tipo de proyectos  puedo financiar con Kickstarter?</h4>
               </div>
               <br><br><br>
               <div class="col-lg-5 col-md-6 col-sm-12 col-center">
                 <h6 class="pagBegin2">Kickstarter está diseñado específicamente para proyectos
                   creativos en las siguientes categorías: Arte, Comics,
                   Artesanías, Baile, Diseño, Moda, Cine y vídeo, Comida,
                   Juegos, Periodismo, Música, Fotografía, Publicaciones,
                   Tecnología, y Teatro. Ya sea que quieras publicar un álbum,
                   escribir un libro, crear una obra de teatro o rodar una película <br>
                   — has llegado al sitio indicado. Para más información, <a href="#">lee reglas del proyecto</a> .</h6>
               </div>
            </div>
       </div>
       <br><br>
       <div class="container">
            <div class="row">
                  <div class=" col-lg-3 col-md-6 col-sm-12 col-center">
                      <h4 class="pagBegin">¿Quién puede contribuir  a mi proyecto??</h4>
                  </div>
                  <br>
                  <div class="col-lg-5 col-md-6 col-sm-12 col-center">
                     <h6 class="pagBegin2">Millones de personas visitan Kickstarter cada semana, pero el
                     apoyo empieza siempre con la gente que conoces. Los amigos,
                     los fans y las comunidades de las cuales formas parte
                     no sólo serán tus primeros patrocinadores, sino también tu
                     mayor recurso para correr la voz acerca de tu proyecto..</h6>
                  </div>
            </div>
       </div>
       <br><br><br>
       <div class="container">
           <div class=" row">
                 <div class=" col-lg-3 col-md-6 col-sm-12 col-center">
                     <h4 class="pagBegin">¿Es mucho trabajo llevar un proyecto? </h4>
                 </div><br>
                 <div class="col-lg-5 col-md-6 col-sm-12 col-center">
                      <h6 class="pagBegin2"> Cada proyecto de Kickstarter tiene momentos excitantes y
                      desafiantes, pero la cantidad de trabajo, generalmente,
                      depende del tamaño y de la complejidad del proyecto.<br>

                      <h6 class="pagBegin2">Por lo general, los primeros días son los que más trabajo
                      requieren - tienes que correr la voz, contestar preguntas de
                      potenciales patrocinadores, etc. También en los últimos días
                      puede ser que estés muy ocupado promoviendo tu proyecto
                      en las redes sociales para alcanzar la meta.</h6>

                      <h6 class="pagBegin2">En ocasiones, algunos proyectos cobran vida propia. Si éste
                      es el caso, aprovecha el tiempo para concentrarte más en la creación y la <br>
                      entrega de las recompensas.</h6>
                 </div>
           </div>
   </div>
   <br><br><br>
   <div class="container ">
     <div class="row">
           <div class=" col-lg-3 col-md-6 col-sm-12 col-center">
             <h4 class="pagBegin">¿Cómo me comunico  si tengo preguntas?</h4>
           </div>

           <div class="col-lg-5 col-md-6 col-sm-12 col-center">
             <h6 class="pagBegin2">Si tienes preguntas, puedes ponerte en contacto con nosotros
             cuando gustes, usando este formulario de contacto. También
             te recomendamos que eches un vistazo a nuestras preguntas
             frecuentes, donde se explican varios temas con más detalle.
             En el manual del creador encontrarás consejos para elaborar y
             administrar un proyecto.</h6>
           </div>
     </div>
   </div>
   <br><br><br>
</section>

  <div class="seccion-video">
      <div class=" col-lg-12 col-md-12 col-sm-12 contenedor">
        <video  class=" col-lg-12 col-md-12 col-sm-12 video" src="https://d3mlfyygrfdi2i.cloudfront.net/175c/startpage_20130916_supercut_hi.mp4" lay="1" >  </video>
      </div>
  </div>

  <br><br><br>
    <div class="contenedor">


<div style="background-color: #F7F7F6">
  <br><br>
    <div class="container">
      <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12 col-center ">
           <h4 class="pagBegin" style="font-size: 30px;">¿Por qué Kickstarter?</h4>
          </div><br><br><br><br>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-center">
            <h4 class="pagBegin">1 <br>
            Kickstarter es una
            plataforma
            exclusivamente para
            proyectos creativos.</h4>
          </div>
          <br><br><br>

           <div class="col-lg-5 col-md-5 col-sm-12 col-center">
             <h6 class="pagBegin2">Creamos Kickstarter como una herramienta para artistas,
             diseñadores, makers, músicos y gente creativa en todo el
             mundo. Nos enorgullece ser la única plataforma dedicada
             exclusivamente a la comunidad creativa.</h6>
            </div>
          </div>
    </div>
    <br><br><br>


      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-center">
            <h4 class="pagBegin">2 <br>
            Todo o nada - un  modelo de financiamiento que funciona.</h4>
          </div><br><br><br>
          <div class="col-lg-5 col-md-5 col-sm-12 col-center">
            <h6 class="pagBegin2">Nuestro modelo permite a los creadores establecer una meta
              de financiamiento y un margen de tiempo en el cual lo quieren
              conseguir. De esta manera no corren el riesgo de tener que
              llevar a cabo un proyecto sin haber conseguido todos los
              fondos necesarios. Al mismo tiempo, a los patrocinadores les
              sirve como incentivo para contribuir más para que se llegue
              a la meta.</h6>
          </div>
        </div>
      </div>
      <br><br><br>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-center">
            <h4 class="pagBegin">3 <br>
              Hay toda una<br> comunidad que quiere <br>apoyarte.</h4>
          </div><br><br><br>
          <div class="col-lg-5 col-md-5 col-sm-12 col-center">
            <h6 class="pagBegin2">Millions of backers agree — helping to create something new
              is exciting. People love peeking behind the creative curtain
              and directly supporting the creative process. In fact, 13.9
              million people have pledged more than $3.39 billion to bring
              Kickstarter projects to life over the years.</h6><br><br>
          </div>
        </div>
      </div>
      </div>
      <br><br><br>

      <div class="container anuncio-crea">
        <h3>Crea un proyecto en una de las siguientes categorías</h1>
      </div>
      <br>

     <?php include 'Plantillas/navegacion.php';   ?>
     <br>

     <div class="container">
       <div class="row ">
           <div class="col-lg-6 col-md-6 col-sm-12">
               <h6 class=oneMore>Desde postales pintadas a mano hasta murales enormes -
                   miles de proyectos de arte han abierto nuevos caminos e
                   iniciado diálogos importantes, además de darle una una
                   oportunidad a mucha gente de compartir su obra con el
                   mundo.
               </h6>
           </div>
           <br><br><br>
           <div class="col-lg-6 col-md-6 col-sm-12 cuadro ">
                 <h5> <b>¿Te interesa?</b></h5>
                 <h6 pagBegin2>Simplemente haz click en Inicio y comienza el
                 diseño. Chécalo, y si te gusta, ¡compártelo
                 con tus amigos!</h6><br>
                 <div class="col-lg-5 col-md-5 col-sm-12" >
                  <form action="empieza-tu-proyecto1.php">
                   <input id="texpais" class="btn btn-dark btn1" type="submit" value="Empieza Tu Proyecto" type="button"  />
                  </form></div>
                 <p>¡Aquí estamos para ayudarte! Nuestro equipo de ayuda a la
                 comunidad lo sabe todo sobre los proyectos en marcha en cada
                 una de nuestras categorías. Déjanos un comentario sobre la ider
                 de tu proyecto: art@kickstarter.com. ¿Tienes alguna otra
                 pregunta? Visita nuestro Centro de ayuda.</p>
           </div>
       </div>
     </div>
     <br><br><br>

      <section class="contenedor arte">
          <div class="row">
            <h5>EJEMPLOS DE PROYECTOS DE ARTE</h5>
            <div class="col-lg-4 col-md-6 col-sm-6">

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">

            </div>
          </div>
      </section>

      <section class=" anuncio-1">
        <div class="contenedor">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12  ">
              <div class="anchura">
              <h3 class="rosa">“Una forma de que las personas<br> creativas controlen su destino.”</h3>
              <h6 class="pagBegin2" style="text-align: center;">— Brian Fargo, creador de un proyecto exitoso en Kickstarter</h6>
              <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-center" >
              <button type="submit" class="btn btn-dark">Empieza tu proyecto</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
      <?php include 'Plantillas/footer.php';   ?>
</body>
</html>
