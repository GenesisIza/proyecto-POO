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
    <?php include 'Plantillas/Header.php';?>
     <br><br><br>
     <div>
        <div class="container-fluid" >
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center textInicios">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 textInicios" style="background-color:#FCFCFB; padding: 20px;">
                  <h6>¿Tienes una cuenta?  <a href="iniciar-seccion"> Iniciar</a>  </h6>
                </div>
              <div class="onlyColor ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center textoIniciosFormularios" style="padding: 23px" >
                  <div >Registrarse</div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input class="form-control cuadrado " type="text" name="txt-nombre" id="txt-nombre"  placeholder="Nombre"">
                  <div class="invalid-feedback">Campo obligatorio</div>
                </div><br>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input type="email" name="txt-correo"  id="txt-correo" class="form-control cuadrado" placeholder="Correo Electronico" onkeydown="validarCorreo(this);">
                  <div class="invalid-feedback">Correo incorrecto</div>
                </div><br>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                 <input type="email" name="txt-correo2" id="txt-correo2" class="form-control cuadrado" placeholder="Vuelva a ingresar el correo electronico" onkeydown="validarCorreo(this);">
                 <div class="invalid-feedback">Correo incorrecto</div>
                 <div class="invalid-feedback">Correo no coinciden</div>
                </div><br>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input type="password" name="txt-contrasena" class="form-control cuadrado " id="txt-contrasena" placeholder="Contraseña" onkeydown="validarContrasena(this);">
                  <div class="invalid-feedback">Al menos 7 caracteres</div>
                </div><br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input type="password" name="txt-contrasena2" class="form-control cuadrado" id="txt-contrasena2"  placeholder="Vuelva a Ingresar la Contraseña" onkeydown="validarContrasena(this);">
                  <div class="invalid-feedback">Al menos 7 caracteres</div>
                    <div class="invalid-feedback">Contraseñas no coinciden</div>
                </div><br>

             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 ">
                  <label class="mensaje" ><input type="checkbox" name="chk-boletin"> Recibirás nuestro boletín semanal y otras<br> actualizaciones esporádicas</label>
                </div><br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
              <a class="btn btn-success" id="cuenta" href="creandoProyecto.php" style="width: 100%" role="button">Crear cuenta</a>
                </div><br>


             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <p>Al registrarte, confirmas aceptación de nuestros términos de uso, <br> política de privacidad y política de cookies.</p>
             </div><br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <button class="btn btn-success facebook"> <i class="fab fa-facebook"></i>&nbsp iniciar sesion con Facebook</button>
             </div><br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                 <p>Nunca publicaremos algo en Facebook sin tu permiso.</p>
             </div><br>
              </div>
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
