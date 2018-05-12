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
   <?php include 'Plantillas/Header.php';   ?>
   <link rel="stylesheet" type="text/css" href="css/signin.css">

     <div class="formulario-reguistro" >
   <div id="respuestasecion"></div>
  <table align="center" cellpadding="15"  class="table-iniciar">
        <td><h2 class="text-inicio">Iniciar sesión</h2></td>
    </tr>
    <form action="">
    <tr>
       <td><input class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center" type="text" id="txt-correo" name="txt-correo" placeholder="Correo Electronico" </td>
    </tr>
    <tr>
      <td><input class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center" type="password" id="txt-contrasenia" name="txt-contrasenia" value="" placeholder="Contraseña"></t>
    </tr>
    <tr>
      <td style="text-align: left;" class="olvidar"><a href="#">¿La olvidaste?</a></td>
    </tr>
      <td ><input class=" btn btn-success inicio  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center" type="button" id="iniciar"    value="Iniciar sesión" ></td>
    </tr>
    </form>
    <tr>
      <td style="  text-align: left;" >
        <label><input type="checkbox"  class="chk-recordar" name="chk-recordar">Recordarme</label>
      </td>
    </tr>
    <tr>
      <td><button class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-center btn btn-success facebook "> <i class="fab fa-facebook"></i>&nbsp Iniciar sesion con Facebook</button></td>
    </tr>
      <tr>
      <td>     <p>Nunca publicaremos algo en Facebook sin tu permiso.</p></td>
    </tr>
     <tr>
        <td style="background-color:#FCFCFB;"> ¿Nuevo usuario en Kickstarter? <a href="registrarse">¡Regístrame!</a></td>
    </tr>
    <tr>
</table>

</div>

  <?php include 'Plantillas/footer.php';   ?>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>
