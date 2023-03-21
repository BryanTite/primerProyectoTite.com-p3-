<?php

    include_once "config/dataBase.php";
    

    class ProductoDAO{
        public static function getAllByType($categoria){
            $con = DateBase::connect();
            $stmt = $con->prepare("SELECT * FROM producto WHERE cod_categoria=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $categoria);

            //Execute statement 
            $stmt->execute();
            $result=$stmt->get_result();


            $listaPlatos = [];
            while($seafoodDB = $result->fetch_object("Producto")){

                $listaPlatos[] = $seafoodDB;

            }

            return $listaPlatos;


            $con->close();

        }
        

        public static function getById($id){
            $con = DateBase::connect();
            $stmt = $con->prepare("SELECT * FROM producto WHERE cod_producto=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("i",$id);

            //Execute statement
            $stmt->execute();
            $result=$stmt->get_result();
            $seafoodDB = '';
            
            $seafoodDB = $result->fetch_object("Producto");

            return $seafoodDB;
            
            $con->close();
        }


        public static function guardarPedido($email,$precioPedido){
            $con = DateBase::connect();
            $stmt = $con->prepare("INSERT INTO pedido (email, precio_total) VALUES (?,?)");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("si",$email,$precioPedido);
            //Execute statement
            $stmt->execute();
            $con->close();
        }


        public static function getByName($nombre,$categoria){
            $con = DateBase::connect();
            $stmt = $con->prepare("SELECT * FROM producto WHERE nombre=? and cod_categoria=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $name, $categoria);

            //Execute statement
            $stmt->execute();
            $result=$stmt->get_result();
            $seafoodDB = '';
            if ($categoria == '1'){
                $seafoodDB = $result->fetch_object("Producto");
            }else{

            }
            return $seafoodDB;

        }


        public static function deleteByName($nombre,$selectCategoria){
            $con = DateBase::connect();
            $stmt= $con->prepare("DELETE FROM producto WHERE nombre=? and cod_categoria=?");
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $nombre,$selectCategoria);

            //Execute statement
            $stmt->execute();

            $con->close();
        }

        public static function addProduct($nombre,$precio,$imagen,$selectCategoria){
            $con = DateBase::connect();
            $stmt= $con->prepare("INSERT INTO producto (nombre,precio,imagen,cod_categoria) VALUES(?,?,?,?)");
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sisi",$nombre,$precio,$imagen,$selectCategoria);
            //Execute statement
            $stmt->execute();
            $con->close();
        }

        public static function updateProductById($cod_producto,$nombre,$precio,$imagen,$selectCategoria){
            $con = DateBase::connect();
            $stmt= $con->prepare("UPDATE producto SET nombre = ?, precio = ?, imagen = ?, cod_categoria = ? WHERE cod_producto = ?");
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sisii",$nombre,$precio,$imagen,$selectCategoria,$cod_producto);
            //Execute statement
            $stmt->execute();
            $con->close();
        }

    }

?>