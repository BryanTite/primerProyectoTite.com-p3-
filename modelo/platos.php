<?php

    include_once "producto.php";

    class Platos extends Producto{
        
        public function __construct($cod_producto, $imagen, $nombre, $precio){
            parent::__construct($cod_producto, $imagen, $nombre, $precio);
        }

        
    }

?>