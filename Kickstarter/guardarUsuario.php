
<?php
    include("../class/class-conexion.php");
    $conexion = new Conexion();
    $tipoUsuario = 1;
    $nombre = $_POST["txt-nombre"];
    $contrasenia = $_POST["txt-contrasena"];
    $correo = $_POST["txt-correo"];

  //  $nombre = "leonard";
  //  $contrasenia = "asd.456";
  //  $correo = "baclixvelasquez@gmail.com";

    $sql = sprintf("INSERT INTO tbl_usuario(codigoTipoUsuario, nombre, ".
           "correo, contrasenia) ".
           "VALUES (%s,'%s','%s','%s')",
           $conexion->antiInyeccion($tipoUsuario),
           $conexion->antiInyeccion($nombre),
           $conexion->antiInyeccion($correo),
           $conexion->antiInyeccion($contrasenia)
          );
    $resultado = $conexion->ejecutarConsulta($sql);

    


    $conexion->cerrarConexion($conexion);



?>
