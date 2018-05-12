<?php
  include("../class/class-conexion.php");
	$conexion = new Conexion();

   //$categoria = $_POST["txt-cat"];

/*	$sql =  "SELECT codigoProyecto, codigoUsuario, codigoCategoria, codigoPais, ".
          "descripcion, meta, plazoFinanciamiento, ".
          "urlImagen, tituloProyecto, ubicacion ".
          "FROM tbl_proyectos WHERE codigoCategoria = $categoria ";

*/

  $sql = "SELECT * FROM tbl_proyectos ";

             $resultado = $conexion->ejecutarConsulta($sql);
             $resultadoproyectos = array();
             while($fila = $conexion->obtenerFila($resultado)){
                 $resultadoproyectos[] = $fila;
                // echo $fila["nombre"];
                // echo $fila["codigoCategoria"];
            }

            echo json_encode($resultadoproyectos);
            //echo $sql;
          //  $conexion->cerrarConexion();
?>
