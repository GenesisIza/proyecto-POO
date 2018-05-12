<?php
    session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"]))
        header("Location: index.php");

    include("class/class-conexion.php");
    $conexion = new Conexion();
    $sql = sprintf("SELECT codigoUsuario, codigoTipoUsuario, ".
            "nombre, correo, contrasenia FROM tbl_usuario ".
            "WHERE correo = '%s' and contrasenia = sha1('%s') and codigoTipoUsuario = 1 ",
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="img/logo3.png">
<title>Kickstarter</title>
<link rel="stylesheet" href="css/colorbox.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css"
</head>
  <body>
    <?php
      if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"])){
          include 'Plantillas/Header.php';
      }else {
          include 'Plantillas/HeaderReguistrado.php';
      }
     ?>

      <div class="text-center">
          <img class="perfil2" src="Proyectos/perfil/perfil.jpg">
          <br><br>
           <h2> <?php echo $registro["nombre"] ; ?>  </h2>


      </div>



     <script src="js/jquery.min.js"></script>
      <script src="js/jquery.colorbox-min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/controlador.js"></script>
  </body>
</html>
