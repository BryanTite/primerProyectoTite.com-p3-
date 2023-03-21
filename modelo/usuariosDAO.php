<?php

    include_once "config/dataBase.php";

    class UsuariosDAO{
        public static function addUser($email,$password,$nombre,$apellidos,$telefono){
            $con = DateBase::connect();
            $stmt = $con->prepare("INSERT INTO usuario (email,password,nombre,apellidos,telefono) VALUES (?,?,?,?,?)");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssi",$email,$password,$nombre,$apellidos,$telefono);
            //Execute statement
            $stmt->execute();
            $con->close();
            
        }

        public static function accesUser($email,$password) {
            $con = DateBase::connect();
        
            //Consultaa base de datos
            $query = "SELECT password FROM usuario WHERE email='$email'";
            $resultado = $con->query($query);
        
            //Verifica la consulta
            if ($resultado && $resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                $contrasenya_cifrada = $fila["password"];
        
                //Cierra la conexión de la base de datos
                $con->close();
        
                //Verificar si la contraseña ingresada coincide con la contraseña cifrada en la base de datos
                if (password_verify($password, $contrasenya_cifrada)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                //Cierra la conexión de la base de datos
                $con->close();
                return false;
            }

        }


        public static function modoAdmin($email) {
            $con = DateBase::connect();
        
            // Consulta base de datos
            $query = "SELECT rol FROM usuario WHERE email = '$email'";
            $resultado = $con->query($query);
        
            if ($resultado->num_rows > 0) {
                $row = $resultado->fetch_assoc();
                if ($row['rol'] === 'root') {
                    return true;
                }
            }
        
            return false;
        }

        public static function pedidoResena() {
            $con = DateBase::connect();
        
            // Consulta base de datos
            $stmt = $con->prepare("SELECT pedido.cod_pedido FROM pedido WHERE email=? 
            AND pedido.cod_pedido NOT IN(SELECT resena.cod_pedido FROM resena WHERE resena.email=?)");
            $stmt->bind_param("ss",$_SESSION["login"],$_SESSION["login"]);
            //Execute statement
            $stmt->execute();
            $stmt->bind_result($id);

            $resena = [];
        
            while ($stmt->fetch()) {
                $resena[] = $id;
            }

            
            $con->close();
            return $resena;
        
        }


    }

?>