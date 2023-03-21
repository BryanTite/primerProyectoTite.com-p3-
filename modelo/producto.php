<?php

    class Producto{

        protected $cod_producto;
        protected $imagen;
        protected $nombre;
        protected $precio;

        public function __construct(){
        }

        public function getId()
        {
            return $this->cod_producto;
        }

        public function setId($cod_producto)
        {
            return $this;
        }


        public function getImagen()
        {
            return $this->imagen;
        }

        public function setImagen($imagen)
        {
            return $this;
        }


        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            return $this;
        }
        
 
        public function getPrecio()
        {
            return $this->precio;
        }
 
        public function setPrecio($precio)
        {
            return $this;
        }


        

    }
        

?>