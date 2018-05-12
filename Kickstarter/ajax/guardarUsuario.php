
<?php
    include("../class/class-conexion.php");
    $conexion = new Conexion();
    $tipoUsuario = $_POST["tipoUsuario"];;
    $nombre = $_POST["txt-nombre"];
    $contrasenia = $_POST["txt-contrasena"];
    $correo = $_POST["txt-correo"];

    //$nombre = "Andres";
  //  $contrasenia = "asd.456";
    //$correo = "Andresvelasquez@gmail.com";

    $sql = sprintf("INSERT INTO tbl_usuario(codigoTipoUsuario, nombre, ".
           "correo, contrasenia) ".
           "VALUES (%s,'%s','%s',sha1('%s'))",
           $conexion->antiInyeccion($tipoUsuario),
           $conexion->antiInyeccion($nombre),
           $conexion->antiInyeccion($correo),
           $conexion->antiInyeccion($contrasenia)
          );
    $resultado = $conexion->ejecutarConsulta($sql);

     $sql2 = sprintf("SELECT codigoUsuario FROM tbl_usuario WHERE nombre='%s'",
             $conexion->antiInyeccion($nombre)  );
             $resultado2 = $conexion->ejecutarConsulta($sql2);
             $resultadocodigo = array();
             while($fila = $conexion->obtenerFila($resultado2)){
                 $resultadocodigo [] = $fila;
            }
    echo json_encode($resultadocodigo);

    $conexion->cerrarConexion($conexion);

?>
