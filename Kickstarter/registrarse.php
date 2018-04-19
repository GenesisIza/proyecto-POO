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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
  <body>
     <?php include 'Plantillas/header.php';   ?>
        
      <form class="formulario-reguistro" >
         <table align="center" cellpadding="15" style="background-color: white;">
             <tr>
               <td style="background-color:#FCFCFB;"><h6>¿Tienes una cuenta?  <a href="iniciar-seccion"> Inicia Sesion</a>  </h6>
              <br></td>
           </tr>
              <tr>
                <td><h2 class="text-inicio is-valid" >Registrarse</h2></td>
              </tr>
           <tr>
<<<<<<< HEAD
              <td> <input class="is-valid"  type="text" name="tex-nombre" id="txt-nombre"  placeholder="Nombre" onkeydown="validarCampo(this);"></td>
=======
              <td> <input  type="text" id="txt-nombre" class="form-control " placeholder="Nombre" >
					<div class="invalid-feedback">Campo obligatorio</div></t>
              </td>
>>>>>>> cb725a0be574a4ccaaaf2ea783ab6e399fa94f53
           </tr>    
           <tr>
             <td><input type="email" name="txt-correo"  id="txt-correo" class="form-control " placeholder="Correo Electronico" onkeydown="validarCorreo(this);">
             <div class="invalid-feedback">Campo obligatorio</div></t>
           </tr>
           <tr>
<<<<<<< HEAD
              <td><input type="email" name="txt-correo2" id="txt-correo2"  placeholder="Vuelva a ingresar el correo electronico" onkeydown="validarCorreo(this);"></td>
           </tr>
           <tr>   
             <td><input type="password" name="txt-contraseña" id="txt-contraseña" placeholder="Contraseña" onkeydown="validarContrasena(this);"></td>
           </tr>   
           <tr>
             <td><input type="password" name="txt-contraseña2" id="txt-contraseña2"  placeholder="Vuelva a Ingresar la Contraseña" onkeydown="validarContrasena(this);"></td>
=======
              <td><input type="email" name="tex-correo2" id="txt-correo2" class="form-control " placeholder="Vuelva a ingresar el correo electronico" onkeydown="validarCorreo(this);">
              <div class="invalid-feedback">Campo obligatorio</div>
          	</td>
           </tr>
           <tr>   
             <td><input type="password" id="txt-contraseña" class="form-control " placeholder="Contraseña" onkeydown="validarContrasena(this);">
				<div class="invalid-feedback">Al menos 7 caracteres</div>
             </td>
           </tr>   
           <tr>
             <td><input type="password" name="tex-contraseña2" id="txt-contraseña2"  class="form-control "  placeholder="Vuelva a Ingresar la Contraseña" onkeydown="validarContrasena(this);">
			<div class="invalid-feedback">Al menos 7 caracteres</div>
             </td>
>>>>>>> cb725a0be574a4ccaaaf2ea783ab6e399fa94f53
           </tr>  
          <tr>
             <td><input id="crear_cuenta"  class="btn btn-success inicio" type="button" value="Crear cuenta" onclick="validar();"></td>
           </tr>
           <tr>
             <td> <p>Al registrarte, confirmas aceptación de nuestros términos de uso, <br> política de privacidad y política de cookies.</p></td>
           </tr>   
           <tr>
             <td><button class="btn btn-success facebook"> <i class="fab fa-facebook"></i>&nbsp iniciar sesion con Facebook</button></td>
           </tr>
             <tr>
             <td><p>Nunca publicaremos algo en Facebook sin tu permiso.</p></td>
           </tr>      
         </table>
      </form> 
      <div id="respuesta" ></div>


  <?php include 'Plantillas/footer.php';   ?>
<<<<<<< HEAD
  <script src="js/jquery-3.3.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>
=======

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>

    
>>>>>>> cb725a0be574a4ccaaaf2ea783ab6e399fa94f53
</body>
</html>