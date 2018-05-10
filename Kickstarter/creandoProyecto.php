<?php
    session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"]))
        header("Location: index.php");

    include("class/class-conexion.php");
    $conexion = new Conexion();
    $sql = sprintf("SELECT codigoUsuario, codigoTipoUsuario, ".
            "nombre, correo, contrasenia FROM tbl_usuario ".
            "WHERE correo = '%s' and contrasenia = '%s' and codigoTipoUsuario = 1 ",
        $_SESSION["email"],
        $_SESSION["psw"]
    );
    //echo $sql;
    //exit;
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){
           header("Location: iniciar-seccion.php");
    }
     $registro = $conexion->obtenerFila($resultado);
?>


<input type="text" name="" value="">
<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" type="image/png" href="img/logo3.png">
  <title>Kickstarter</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
  <body style="background-color: #F0F0F0;">
     <?php include 'Plantillas/header.php';   ?>
     <br><br><br>
     <div>
      <h3 class="primero" style="text-align: center; ">¡Vámonos! <?php echo $registro["nombre"] ; ?> </h3>
       <h4 class="segundo" style="text-align: center; ">Haz una buena impresión con el título y la imagen del proyecto. Define la meta de <br> financiación, la duración de la campaña y la categoría del proyecto.</h4>
<br><br>
        <div class="container-fluid" >
          <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 col-center textInicios">

              <div class="onlyColor ">
                <br><br>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center ">
                   <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                     <h4 class="segundo">Imagen Del Proyecto:</h4>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                  <select id="slc-urlImagen"  name="slc-urlImagen" class="forma form-control col-center" >
              <option value="0">aqui iran urls de imagen segun categoria :(</option>


            </select><br>
                     <p>Esta es la primera cosa que la gente ve al abrir tu proyecto, así que escoge una imagen nítida y sin texto. Aquí unos consejos.</p>
                  </div>
                  </div>
                </div><br>

                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                   <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                     <h4 class="segundo">Meta:</h4>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
               <textarea class="form-control" placeholder="$" ></textarea><br>
               <p>El modelo de financiamiento de Kickstarter es "todo o nada". No hay problema si recaudas más de lo que te habías propuesto, pero si no se llega a la meta de financiación, no se cobrarán las contribuciones. La meta que pongas deberá incluir el mínimo necesario para terminar el proyecto y enviar las recompensas, además de un colchón para las comisiones por procesamiento de pago.

Si la financiación de tu proyecto se lleva a cabo con éxito, se deducirán las siguientes comisiones del monto total: una comisión de Kickstarter del 5 % y una comisión por procesamiento de pago (entre el 3 % y el 5 %). Si no se llega a la meta de financiamiento en el plazo estipulado, no se cobrará ninguna comisión.

Ver desglose de tarifas</p>
                  </div>
                  </div>
                </div><br>


 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                   <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                     <h4 class="segundo">Plazo Financiamiento:</h4>
                   </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                   <input type="date" class="form-control date" placeholder="Fecha"><br>
                   <p>Proyectos de una duración más corta tienen más probabilidades de éxito. No se puede modificar la duración una vez que el proyecto haya sido publicado.</p>
                  </div>
                  </div>
                </div><br>


 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                   <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                     <h4 class="segundo">Titulo:</h4>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                   <input  type="text" class="form-control"><br>
                     <p>El buscador se orienta por palabras incluidas en el título y la descripción de tu proyecto. Tenlo en cuenta y selecciona palabras precisas y descriptivas. También se puede hacer una búsqueda por nombre de creador.

Estas palabras facilitarán la búsqueda de tu proyecto, ¡así que elígelas sabiamente! Tu nombre también aparecerá en el buscador.</p>
                  </div>
                  </div>
                </div><br>


 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                   <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                     <h4 class="segundo">Ubicación del proyecto</h4>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 col-center bloquesito" style="padding-top: 30px;  border-radius: 0px">
                 <textarea class="form-control" placeholder="$" ></textarea>
                  </div>
                  </div>

                </div><br>

<a href="cerrarsecion.php">Cerrar Seccion</a>
            </div>
          </div>
          </div><br><br>
        </div>


  <?php include 'Plantillas/footer.php';   ?>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
