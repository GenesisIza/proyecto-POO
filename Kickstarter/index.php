
    <!DOCTYPE html>
    <html lang="en">
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
    <?php include 'Plantillas/header.php';   ?>
    <div class"clearfix"> </div>
    <br>
    <div class="esconder">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-3 esconder">
              <h6>15 de febrero de 2018 <br> <b>Haciendo realidad proyectos creativos</b></h6>
            </div>
             <div class="col-md-3 esconder">
               <h6>TOTAL DE PATROCINADORES <br> <b>100000.</b>  </h6>
            </div>
            <div class="col-md-3 esconder ">
              <h6> FINANCIADOS <br> <b>200000.</b>  </h6>
            </div>
            <div class="col-md-3 esconder ">
             <h6>PROYECTOS ACTIVOS <br> <b>3558.</b> </h6>
            </div>
        </div>
    </div>
    </div>
    <hr class="esconder" style="border: 0.4px solid black;">
    <br>
    
    <div class="container-fluid">
        <ul class=" menu-programa nav nav-menu1">

          <li class="nav-item">
            <a id="13"  class="nav-link " href="#publicaciones" onclick="IdProyecto(13);"  >Publicaciones</a>
          </li>
          <li class="nav-item">
             <a id="9" class="nav-link" href="#juegos" onclick="IdProyecto(9);">Juegos</a>
          </li>
          <li class="nav-item">
            <a id="5" class=" nav-link " href="#comics" onclick="IdProyecto(5);">Cómics & ilustración</a>
          </li>
          <li class="nav-item">
            <a id="6"  class="nav-link " href="#comida "  onclick="IdProyecto(6);">Comida & creaciones</a>
          </li>
          <li class="nav-item">
            <a id="11"  class=" nav-link " href="#musica" onclick="IdProyecto(11);">Música</a>
          </li>
           <li class="nav-item">
             <a id="15" class=" nav-link" href="#diseño" onclick="IdProyecto(15);">Diseño & tecnología</a>
             <li class="nav-item">
              <a  id="4"  class="nav-link active" href="#Cine" onclick="IdProyecto(4);" >Cine</a>
          </li>
          </li>
       </ul>
    </div><br>

    <div id="categorias" class=""></div>
<!--
    <div id="cine" class="container-fluid">
       <h3>Cine</h3>
       <br><br>-->
       <h6>Proyectos Destacados</h6>
	        <div  class="container-fluid row">
	         		    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-4 col-12">
	         		      	 <div id="mostrarProyecto1">
                       <img class="imagendetabla container-fluid img-fliud" src="img/01.png" alt="foto1">
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-4 col-sm-8 col-12">
                     <hr>
                      <div class="container-fluid" id="mostrarProyecto2"></div>

                    <!--  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <img class="img-fluid" src="'+respuesta[i].urlImagen+'">
                      </div>
                      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                        +respuesta[i].tituloProyecto+' <br> 22 % financiado
                      </div>
                      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                        boton
                      </div>
                    </div>-->

	         		   <!-- 	<table class="table ">
                    <tbody>

                      <tr >
                          <td><a href=""> <img class="img-fliud" src="img/cat-01.png"> </a>  </td>
                          <td> <a href="">Pandora </a> <br> 22 % financiado </td>
                      </tr >
                      <tr>
                         <td><a href=""> <img class="img-fliud" src="img/cat-02.jpg" > </a></td>
                         <td> <a href="">Knock Down The House: A Documentary</a> <br>52 % financiado</td>
                      </tr>
                      <tr >
                         <td><a href=""> <img class="img-fliud" src="img/cat-03.png"> </a>  </td>
                         <td> <a href="">The Grind - Pilot and Mini Series</a> <br> 0 % financiado</td>
                      </tr >
                      <tr>
                        <td><a href=""> <img class="img-fliud" src="img/cat-04.jpg" > </a></td>
                        <td> <a href="">El Proyeccionista - Documentary</a> <br> 11 % financiado</td>
                      </tr>
                    </tbody>
                  </table>-->
                <div id="VerMas" class=""></div>
	        </div>

          </div>
    </div>
    <br><br>


    <div class="container-fluid">
      <hr style="border: 0.4px solid gray;">
      <h5>Te Recomendamos</h5><br>
	       	<div class="row">
	       	  	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
	       		   	   <a href="">
                    <img class="img-fluid " src="img/cat-05.jpg">
                    <p>A new album of songs addressing mental <br>
                    health issues, addiction, and family <br>
                    dysfunction. Thank you for your support! <br>
                    #SongsHeal <br><br>
                    75 % financiado
                    </p>
               </a>

	       			</div>
	       	    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
	       		    	 <a href="">
                    <img class="img-fluid "  src="img/cat-06.png">
                    <p>
                      13 artists blend the <br>
                      fantastical with the scientific in a 60+ page collection of <br>
                      fictitious critters inspired by 90s <br>
                      era publications. <br><br>

                     78 % financiado
                    </p>
                </a>

	       		  </div>

	       		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
	       		   	<a href="">
                  <img class="img-fluid " src="img/cat-07.jpg">
                  <p>
                    A children's STEM Talking Book series that <br>
                     fuels curiosity and encourages children to <br>
                      think like innovators. <br><br>
                     79 % financiado
                  </p>
                </a>
	       		</div>
	       	  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
	       		    	<a href="">
                     <img class="img-fluid " src="img/cat-08.jpg">
                     <p>
                        A sorcerer saves a girl from flesh-eating <br>
                        demons. After trying to use magic to find <br>
                        her friends, he’s trapped in a vision of the past. <br><br>
                        81 % financiado
                     </p>
                   </a>
	       	  </div>
	      </div>
    </div>
    <br><br>
    <hr style="border: 0.4px solid gray;">
    <br><br>
-->
    <div class="container-fluid">
      <div class="row">
          <div class="col-xl-2 col-lg-2  col-md-2 col-sm-12 col-12" >
              <img style="font-size: 1.2em; font-style: Cooper Light ;" src="img/logo2.png">
          </div>
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12" >
              <h1 class="aqua" style="   font-size: 48px; text-align: left;display: inline-flex;padding-left: 60px;">Lo unico que puedes hacer es hacer todo lo <br> que puedas</h1>
          </div>
      </div>
    </div>

    <br><br>
    <hr style="border: 0.4px solid gray;">
    <br><br>


    <div class="container-fluid">
		<div class="row">
			<div style="padding-top:20px;" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<img class="img-fluid" src="img/A.jpeg">
      </div>
      <br><br>
			<div style="padding-top:20px;" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				 <img class="img-fluid" src="img/drip.png ">
			</div>
		</div>
	</div>

<br><br>
    <hr style="border: 0.4px solid gray;">
    <br><br>



<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        <div class="card mb-3">
				  <img class="card-img-top" src="img/h1.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="">LERR MAS-></a>
          </div>
			</div>
    </div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        <div class="card mb-3">
				<img class="card-img-top" src="img/h2.png" alt="Card image cap">
                   <div class="card-body">
                        <p class="card-text">Mas alla de las fronteras a traves de la optica de <br> Yoshua Akon  </p>
                        <a href="">LERR MAS-></a>
                   </div>
      </div>
    </div>
      	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="card mb-3">
				<img class="card-img-top" src="img/h3.png" alt="Card image cap">
                       <div class="card-body">
                          <p class="card-text">Voz Conyta es un homenaje a las obras de <br> grandes muralistas mexicanos atraves del rap</p>
                          <a href="">LERR MAS-></a>
                       </div>
                     </div>
			</div>
		</div>
	</div>
<br><br>

<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        <div class="card" style="width: 400px;">
				  <div class="card-body">
                        <h6 class="card-title">Salon Acme-- un espacio que amplifica a artistas <br> emerguentes en CDMX</h6>
                        <br>
                        <h6>LERR MAS</h6>
                        <br>
                        <img src="img/cat-09">
                    </div>
                </div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        <div class="card" style="width: 400px;">
				 <div class="card-body">
                        <h6 class="card-title">Cuatro historias que exploran el interminable viaje de artista</h6>
                        <br>
                        <h6>LERR MAS</h6>
                        <br>
                        <img src="img/cat-10">
                    </div>
            </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="card" style="width: 400px;">
                      <div class="card-body">
                        <h6 class="card-title">Cinco años de la principal feria de arte independiente  de latinoamerica</h6>
                        <br>
                        <h6>LERR MAS</h6>
                        <br>
                        <img src="img/cat-11">
                    </div>
                  </div>
			</div>
		</div>
</div>
<br>
<hr style="border: 0.4px solid gray;">
<br><br>

<div class="container-fluid">
      <h3 style="text-align: center;">Suscríbete a nuestro boletín semanal</h3><br><br>
       <h6 style="text-align: center;">Semanalmente: Unos cuantos proyectos, seleccionados por el equipo de <br> Kickstarter.</h6><br>
       <form  class="">
            <div class="row">
            <div class=" col-lg-2 col-md-12 col-sm-12"></div>
              <div style="display: inline-block;" class="col-lg-8 col-md-12 col-sm-12 ">
                  <input  class=" col-lg-5 col-md-5 col-sm-12 col-12 " name="txt-suscribir" id="txt-suscribir" style="width:400px;" type="email"  placeholder="Correo electronico" onkeydown="validarCorreo(this);">
                  <button name="btn-suscribir" id="btn-suscribir" type="submit" class="col-lg-3 col-md-3 col-sm-12  col-12 btn btn-dark" >Suscribirte Ahora</button>
              </div>
            <div class="col-lg-2 col-md-12 col-sm-12 "></div>
       </form>
</div>
<br><br>

<hr style="border: 0.4px solid gray;">
     <div class="container">
           <ul class="nav">
             <li class="nav-item">
               <a class="nav-link " href="#">Arte</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " href="#">Cómics & ilustración</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">Diseño & tecnología</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link active" href="#">Cine</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " href="#">Comida & creaciones</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">Juegos</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " href="#">Música</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " href="#">Publicaciones</a>
             </li>
          </ul>
    </div>
    <hr style="border: 0.4px solid gray;">
     <?php include 'Plantillas/footer.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
</html>
