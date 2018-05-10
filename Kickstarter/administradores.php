<?php
    session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"]))
        header("Location: index.php");

    include("class/class-conexion.php");
    $conexion = new Conexion();
    $sql = sprintf("SELECT codigoUsuario, codigoTipoUsuario, ".
            "nombre, correo, contrasenia FROM tbl_usuario ".
            "WHERE correo = '%s' and contrasena = '%s' and codigo_tipo_usuario = 2 ",
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
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" href="css/signin.css">
</head>
  <body>
   <div style=" background-color: black; padding: 100px;" class="">
     <h1 style="color: white;" >Bienvenido Señor <?php echo $registro["nombre"]; ?></h1>
   </div>


   <div style=" padding: 100px;" class="container-fluid">
     <h3>PROYECTOS</h3>
   </div>
  <div style=" padding: 100px;" class="container-fluid">
    <h2>Usuarios</h2>
  </div>

 <a href="cerrarsecion.php">Cerrar Seccion</a>
 <a href="ingresarAdministrador.php">Agregar Administrador</a>


    <?php include 'Plantillas/footer.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
</html>
