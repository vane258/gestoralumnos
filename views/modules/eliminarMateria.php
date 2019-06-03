<?php
    
    	//Enviar los datos a la clase del controlador para llamar a una función
        $datos = new MvcController();
        $eliminar = $datos->eliminarDatosMateriaController($_GET["id"]);
    
    
?>