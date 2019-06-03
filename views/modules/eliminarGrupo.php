<?php
    
    $datos = new MvcController();

    $grupos = $datos->verificarGruposController($_GET["id"]);

    if($grupos){
    	header("location: index.php?action=ImposibleGrupo");
    }else{
    	$eliminar = $datos->eliminarDatosGrupoController($_GET["id"]);
    }

?>