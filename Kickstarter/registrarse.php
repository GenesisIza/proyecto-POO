  <?php include 'Plantillas/header.php';   ?>
<script  src="js/controlador.js"></script> 
  <link rel="stylesheet" type="text/css" href="css/signin.css">

     <div class="formulario-reguistro" >
       
      
  <table align="center" cellpadding="15" style="background-color: white;">
     <tr>
        <td style="background-color:#FCFCFB;"><h6>¿Tienes una cuenta?  <a href="iniciar-seccion"> Inicia Sesion</a>  </h6>
       <br></td>
    </tr>
    <tr>
        <td><h2 class="text-inicio">Registrarse</h2></td>
    </tr>
    <tr>
       <td> <input  type="text" id="txt-nombre"  placeholder="Nombre">
       </td>
    </tr>    
    <tr>
      <td><input type="email"  id="txt-correo" placeholder="Correo Electronico" onkeydown="validarCorreo(this);"></t>
    </tr>
    <tr>
       <td> <input type="email"  placeholder="Vuelva a ingresar el correo electronico" onkeydown="validarCorreo(this);"></td>
    </tr>
    <tr>   
      <td><input type="password"  placeholder="Contraseña" onkeydown="validarContrasena(this);"></td>
    </tr>   
    <tr>
      <td>   <input type="password"  placeholder="Vuelva a Ingresar la Contraseña" onkeydown="validarContrasena(this);"></td>
    </tr>  
   <tr>
      <td >  <input  class="btn btn-success inicio" type="button" value="Crear cuenta" onclick="validar();"></td>
    </tr>
    <tr>
      <td> <p>Al registrarte, confirmas aceptación de nuestros términos de uso, <br> política de privacidad y política de cookies.</p></td>
    </tr>   
    <tr>
      <td><button class="btn btn-success facebook"> <i class="fab fa-facebook"></i>&nbsp iniciar sesion con Facebook</button></td>
    </tr>
      <tr>
      <td>     <p>Nunca publicaremos algo en Facebook sin tu permiso.</p></td>
    </tr>
       
</table>
</div>


     <?php include 'Plantillas/footer.php';   ?>