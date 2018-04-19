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
   <link rel="stylesheet" type="text/css" href="css/signin.css">

     <div class="formulario-reguistro" >
      
  <table align="center" cellpadding="15"  class="table-iniciar">
        <td><h2 class="text-inicio">Iniciar sesión</h2></td>
    </tr>
    <tr>
       <td> <input type="text" id="txt-correo" name="txt-correo" placeholder="Correo Electronico" </td>
    </tr>    
    <tr>
      <td><input type="password" name="" value="" placeholder="Contraseña"></t>
    </tr>
    <tr>
      <td style="  text-align: left;" class="olvidar"><a href="#">¿La olvidaste?</a></td>
    </tr>
      <td ><input  class=" btn btn-success inicio " type="button" value="Iniciar sesión" ></td>
    </tr>
    <tr>
      <td style="  text-align: left;" >
        <label><input type="checkbox"  class="chk-recordar" name="chk-recordar">Recordarme</label>
      </td>
    </tr>   
    <tr>
      <td>  <button class=" btn btn-success facebook "> <i class="fab fa-facebook"></i>&nbsp Iniciar sesion con Facebook</button></td>
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
</body>
</html>






  
  
