<?php
  include("../class/class-conexion.php");
	$conexion = new Conexion();

  $categoria = $_POST["txt-cat"];

	$sql = "SELECT a .codigoProyecto, b.nombre , a.codigoCategoria, a. codigoPais, a.descripcion,".                
          "a. meta, a.plazoFinanciamiento, a.urlImagen, a.tituloProyecto,".  
          "a.ubicacion FROM tbl_proyectos a inner join tbl_usuario b on  ".
          "(a.codigoUsuario = b.codigoUsuario) WHERE codigoCategoria =$categoria ";
          $resultado = $conexion->ejecutarConsulta($sql);
             $resultadoproyectos = array();
             while($fila = $conexion->obtenerFila($resultado)){
                 $resultadoproyectos[] = $fila;
                // echo $fila["nombre"];
                // echo $fila["codigoCategoria"];
            }
//echo $sql;
            echo json_encode($resultadoproyectos);
            //echo $sql;
          //  $conexion->cerrarConexion();
?>
