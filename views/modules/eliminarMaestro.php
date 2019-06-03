<?php
    
    $datos = new MvcController();

    $materias_maestros = $datos->verificarMateriasMaestrosController($_GET["id"]);

    if($materias_maestros){
    	header("location: index.php?action=ImposibleMaestro");
    }else{
    	$eliminar = $datos->eliminarDatosMaestroController($_GET["id"]);
    }

?>