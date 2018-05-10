
<?php
    include("../class/class-conexion.php");
    $conexion = new Conexion();
    $tipoUsuario = 2;
  //  $nombre = $_POST["txt-nombre"];
  //  $contasenia = $_POST["txt-contrasena"];
  //  $correo = $_POST["txt-correo"];

    $nombre = "hector lainez";
    $contrasenia = "asd.456";
    $correo = "hector lainez@gmail.com";

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
