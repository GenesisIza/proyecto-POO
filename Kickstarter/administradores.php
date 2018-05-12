

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <?php
      if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"])){
          include ("Plantillas/Header.php");
      }else {
          include 'Plantillas/HeaderReguistrado.php';
      }
      ?>
      
   <div style=" background-color: black; padding: 100px;" class="">
     <h1 style="color: white;" >Bienvenido Señor <?php echo $registro["nombre"]; ?></h1>//da el error por el nombre
   </div>
     <div><br><br>
        <div class="container-fluid" >
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-center textInicios">

              <div class="onlyColor2 ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center textoIniciosFormularios" style="padding: 23px" >
                  <div >Registrar Administrador</div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input class="form-control cuadrado " type="text" name="txt-nombre" id="txt-nombreA"  placeholder="Nombre" >
                  <div class="invalid-feedback">Campo obligatorio</div>
                </div><br>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input type="email" name="txt-correo"  id="txt-correoA" class="form-control cuadrado" placeholder="Correo Electronico" onkeydown="validarCorreo(this);">
                  <div class="invalid-feedback">Correo incorrecto</div>
                </div><br>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                 <input type="email" name="txt-correo" id="txt-correoA2" class="form-control cuadrado" placeholder="Vuelva a ingresar el correo electronico" onkeydown="validarCorreo(this);">
                 <div class="invalid-feedback">Correo incorrecto</div>
                </div><br>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input type="password" name="txt-contrasena2" class="form-control cuadrado " id="txt-contrasenaA2" placeholder="Contraseña" onkeydown="validarContrasena(this);">
                  <div class="invalid-feedback">Al menos 7 caracteres</div>
                </div><br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <input type="password" name="txt-contrasena" class="form-control cuadrado" id="txt-contrasenaA"  placeholder="Vuelva a Ingresar la Contraseña" onkeydown="validarContrasena(this);">
                  <div class="invalid-feedback">Al menos 7 caracteres</div>
                </div><br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
               <a id="cuentaAdm" class="btn btn-warning">Agregar Administradores</a>
                </div>
                <br>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
               <a href="cerrarsecion.php"  class="btn btn-info">Cerrar Sesion</a>
                </div>
                <br>

             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center">
                  <p>Al registrarte, confirmas aceptación de nuestros términos de uso, <br> política de privacidad y política de cookies.</p>
             </div>
             </div><br>

              </div>
            </div>
          </div>
          </div>
      <br><br>
        </div>

    <?php include 'Plantillas/footer.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
</html>
