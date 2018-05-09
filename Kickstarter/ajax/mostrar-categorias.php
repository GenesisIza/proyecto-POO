<?php
include("../class/class-conexion.php");
	$conexion = new Conexion();

	$sql = "SELECT codigoCategoria, nombre FROM tbl_categoria ";
             $resultado = $conexion->ejecutarConsulta($sql);
             $resultadoUsuarios = array();
             while($fila = $conexion->obtenerFila($resultado)){
                $resultadoUsuarios[] = $fila;
            }

            echo json_encode($resultadoUsuarios);
            //echo $sql;
            $conexion->cerrarConexion();
?>
