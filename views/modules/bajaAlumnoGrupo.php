<?php
    
    $datos = new MvcController();
    $eliminar = $datos->eliminarDatosAlumnoGrupoController($_GET["id_alumno"],$_GET["id_grupo"]);
    
    
?>