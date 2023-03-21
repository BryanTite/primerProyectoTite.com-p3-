<?php

    class usuarioController{

        public static function registro(){
            
            include_once "config/dataBase.php";
            include_once "modelo/usuariosDAO.php";
            
            session_start();
            if(isset($_POST["email"], $_POST["password"], $_POST["nombre"], $_POST["apellidos"], $_POST["telefono"])){
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                UsuariosDAO::addUser($_POST["email"], $password, $_POST["nombre"], $_POST["apellidos"], $_POST["telefono"]);
                header("Location:".base_url."usuario/sesion");
            }
            require_once "views/includes/header.php";
            require_once "views/registro.php";
            require_once "views/includes/footer.php";
        }


        public static function sesion(){
            
            include_once "config/dataBase.php";
            include_once "modelo/usuariosDAO.php";

            session_start();
            if((isset($_POST["email"])) && (isset($_POST["password"]))){
                $log = UsuariosDAO::accesUser($_POST["email"], $_POST["password"]);
                $log2 = UsuariosDAO::modoAdmin($_POST["email"]);

                
                if ($log === false) {
                    if ($log2 === true) {
                        $_SESSION["rol"] = "root";
                    
                    } else {
                        $_SESSION["rol"] = "user";
                    }

                    $_SESSION["login"] = $_POST["email"];

                    header("Location:".base_url."producto/index");
                } else {
                    header("Location:".base_url."usuario/sesion");
                }
                    
                
            }
            require_once "views/includes/header.php";
            require_once "views/sesion.php";
            require_once "views/includes/footer.php";
        }
        

        public function cerrarSesion(){
            session_start();
            unset($_SESSION["login"]);
            header("Location:".base_url."producto/index");
            exit();
        }

        public function resena(){
            include_once "modelo/usuariosDAO.php";      
            session_start();
            
            $pedidoID = UsuariosDAO::pedidoResena();
            require_once "views/includes/header.php";
            require_once "views/resena.php";
            require_once "views/includes/footer.php";
        }

    }

?>