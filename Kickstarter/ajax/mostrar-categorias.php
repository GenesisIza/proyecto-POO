<?php 
include("../class/class_conexion.php");
	$conexion = new Conexion();

	$sql = "SELECT codigoCategoria, nombre FROM tbl_categoria ";
             $resultado = $conexion->ejecutarInstruccion($sql);
             $resultadoUsuarios = array();
             while($fila = $conexion->obtenerFila($resultado)){
                $resultadoUsuarios[] = $fila;
            }
        
            echo json_encode($resultadoUsuarios);
            //echo $sql;
            $conexion->cerrarConexion();
?>