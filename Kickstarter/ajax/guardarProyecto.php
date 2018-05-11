
<?php
    include("../class/class-conexion.php");
    $conexion = new Conexion();
    $sql = sprintf("INSERT INTO tbl_proyectos(codigoUsuario, codigoCategoria, codigoPais, ".
    	"descripcion, meta, plazoFinanciamiento, urlImagen, tituloProyecto, ubicacion) VALUES ".
    "(%s,%s,'%s','%s',%s,'%s','%s','%s','%s')",
           $conexion->antiInyeccion($_GET["codigoUsuario"]),
           $conexion->antiInyeccion($_GET["codigoCategoria"]),
           $conexion->antiInyeccion($_GET["codigoPais"]),
           $conexion->antiInyeccion($_GET["descripcion"]),
           $conexion->antiInyeccion($_GET["meta"]),
           $conexion->antiInyeccion($_GET["plazo"]),
           $conexion->antiInyeccion($_GET["urlImagen"]),
           $conexion->antiInyeccion($_GET["tituloProyecto"]),
           $conexion->antiInyeccion($_GET["Ubicacion"])
          );
    $resultado = $conexion->ejecutarConsulta($sql);

    echo $sql;

    $conexion->cerrarConexion($conexion);

?>


