<?php

class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=practica07", "admin", "ad5d9b3b1ed05b950fa6226895a5b81931f013164a15741e");
        return $link;
    }

}