<?php
include("../class/class-conexion.php");
	$conexion = new Conexion();

   $categoria = $_POST["txt-cat"];

	$sql = "SELECT codigoProyecto, codigoUsuario, codigoCategoria, codigoPais, ".
          "descripcion, meta, plazoFinanciamiento, ".
          "urlImagen, tituloProyecto, ubicacion ".
          "FROM tbl_proyectos WHERE codigoCategoria = $categoria ";

             $resultado = $conexion->ejecutarConsulta($sql);
             $resultadoUsuarios = array();
             while($fila = $conexion->obtenerFila($resultado)){
                 $resultadoUsuarios[] = $fila;
                // echo $fila["nombre"];
                // echo $fila["codigoCategoria"];
            }

            echo json_encode($resultadoUsuarios);
            //echo $sql;
          //  $conexion->cerrarConexion();
?>
