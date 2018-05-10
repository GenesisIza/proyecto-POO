<?php
    session_start();
    include("../class/class-conexion.php");
    $conexion = new Conexion();
    //$contrasenia = $_POST["txt-contrasena"];
    //$correo = $_POST["txt-correo"];

    //  $nombre = "leonard";
     $contrasenia = "asd.456";
     $correo = "bcalix@gmail.com";


    $sql = sprintf("SELECT codigoUsuario, codigoTipoUsuario, ".
                  "nombre, correo, contrasenia FROM tbl_usuarios ".
                  "WHERE correo = '%s' and contrasena = '%s' ",
                  $correo,
                  $contrasenia
    );
    //echo $sql;
    //exit;
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)>0){
        $respuesta = $conexion->obtenerFila($resultado);
        $respuesta["codigoResultado"] = 0;
        $respuesta["mensajeResultado"] = "El usuario si existe";
        $_SESSION["usr"] = $respuesta["correo"];
        $_SESSION["psw"] = $contrasenia;
    }else {
        $respuesta["codigoResultado"] = 1;
        $respuesta["mensajeResultado"] = "El usuario no existe";
        session_destroy();
    }
    echo json_encode($respuesta);

?>
