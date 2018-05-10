<?php
    session_start();
    if (!isset($_SESSION["usr"]) || !isset($_SESSION["psw"]))
        header("Location: index.html");

    include("class/class-conexion.php");
    $conexion = new Conexion();
    $sql = sprintf("SELECT codigoUsuario, codigoTipoUsuario, ".
            "nombre, correo, contrasena FROM tbl_usuarios ".
            "WHERE correo = '%s' and contrasena = '%s' and codigo_tipo_usuario = 1"
        $_SESSION["usr"],
        $_SESSION["psw"]
    );
    //echo $sql;
    //exit;
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){
           header("Location: index.html");
    }

    $registro = $conexion->obtenerFila($resultado);

?>
