<?php
    session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["psw"]))
        header("Location: index.php");

    include("class-conexion.php");
    $conexion = new Conexion();
    $sql = sprintf("SELECT codigoUsuario, codigoTipoUsuario, ".
            "nombre, correo, contrasenia FROM tbl_usuario ".
            "WHERE correo = '%s' and contrasenia = '%s' and codigo_tipo_usuario = 1 ",
        $_SESSION["email"],
        $_SESSION["psw"]
    );

    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){
           header("Location: index.php");
    }


?>
