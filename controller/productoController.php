<?php

    class productoController{
        public static function index(){
            session_start();
            require_once "views/includes/header.php";
            require_once "views/principal.php";
            require_once "views/includes/footer.php";
        }

        public static function mostrarCarta(){
            	
            include_once "modelo/pedido.php";
            include_once "utils/productosLoad.php";
            
            session_start();
            
            if(isset($_SESSION["compra"])){
                if(isset($_POST["mariscada"])){

                    $productoSel = new Pedido (ProductoDAO::getById($_POST["mariscada"]));
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["mariscada"]);

                }elseif(isset($_POST["pescados"])){
                    $productoSel = new Pedido (ProductoDAO::getById($_POST["pescados"]));
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["pescados"]);

                }elseif(isset($_POST["mariscos"])){
                    $productoSel = new Pedido (ProductoDAO::getById($_POST["mariscos"]));
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["mariscos"]);

                }elseif(isset($_POST["cefalopodos"])){
                    $productoSel = new Pedido (ProductoDAO::getById($_POST["cefalopodos"]));
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["cefalopodos"]);

                }elseif(isset($_POST["moluscos"])){
                    $productoSel = new Pedido (ProductoDAO::getById($_POST["moluscos"]));
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["moluscos"]);

                }
            }else{
                $_SESSION["compra"] = array();
            }
            require_once "views/includes/header.php";	
            require_once "views/carta.php";
            require_once "views/includes/footer.php";
        }


        public static function mostrarCarrito(){
            
            include_once "modelo/pedido.php";
            include_once "utils/productosLoad.php";
            include_once "modelo/calcularPrecio.php";
        
            session_start();
            
            if(isset($_POST["Del"])){
                $pedidoSel = $_SESSION["compra"][$_POST["pos"]];

                if($pedidoSel->getCantidad() == 1){
                    unset($_SESSION["compra"][$_POST["pos"]]);

                    $_SESSION["compra"] = array_values($_SESSION["compra"]);
                }else{
                    $pedidoSel->setCantidad($pedidoSel->getCantidad() -1);
                }

            }else if(isset($_POST["Add"])){
                $pedidoSel = $_SESSION["compra"][$_POST["pos"]];
                $pedidoSel->setCantidad($pedidoSel->getCantidad() + 1);
            }  
                
            require_once "views/includes/header.php";
            require_once "views/carrito.php";
            require_once "views/includes/footer.php";
        }



        public static function confirmarPedido(){
            
            include_once "modelo/pedido.php";
            include_once "utils/productosLoad.php";
            include_once "modelo/calcularPrecio.php";

            session_start();
            
            if(isset($_SESSION["login"])){
                // El usuario está iniciado sesión, se puede procesar la compra
                $precioTotal = calcularPrecio::calcularPrecioFinal($_SESSION["compra"]);
                setcookie("cookiePrecio", $precioTotal, time() + (86400 * 30), "/");
                $precioPedido = $_SESSION["precio"];
                ProductoDAO::guardarPedido($_SESSION["login"],$precioPedido);
              } else {
                header("Location:".base_url."usuario/sesion");
              }
            require_once "views/includes/header.php";
            require_once "views/confirmar.php";
            require_once "views/includes/footer.php";
        }


        public static function panelAdmin(){
            session_start();
            require_once "views/includes/header.php";
            require_once "views/panelAdmin.php";
            require_once "views/includes/footer.php";
        }

        public static function agregarProductoAdmin(){
            session_start();
            include_once "modelo/pedido.php";
            include_once "utils/productosLoad.php";

            if(isset($_POST["nombre"],$_POST["precio"],$_POST["imagen"],$_POST["selectCategoria"])){
                $ruta ="assets/images/imgAdmin/";
                $nombre = $_POST["nombre"];
                $precio = $_POST["precio"];
                $imagen = $ruta.$_POST["imagen"];
                $selectCategoria = $_POST["selectCategoria"];

                ProductoDAO::addProduct($nombre,$precio,$imagen,$selectCategoria);
            }

            require_once "views/includes/header.php";
            require_once "views/panelAdmin.php";
            require_once "views/includes/footer.php";
        }

        public static function updateProductoAdmin(){
            session_start();
            include_once "modelo/pedido.php";
            include_once "utils/productosLoad.php";

            if(isset($_POST["cod_producto"],$_POST["nombre"],$_POST["precio"],$_POST["imagen"],$_POST["selectCategoria"])){
                $ruta ="assets/images/imgAdmin/";
                $cod_producto = $_POST["cod_producto"];
                $nombre = $_POST["nombre"];
                $precio = $_POST["precio"];
                $imagen = $ruta.$_POST["imagen"];
                $selectCategoria = $_POST["selectCategoria"];

                ProductoDAO::updateProductById($cod_producto,$nombre,$precio,$imagen,$selectCategoria);
            }
            

            require_once "views/includes/header.php";
            require_once "views/panelAdmin.php";
            require_once "views/includes/footer.php";
        }

        public static function eliminarProductoAdmin(){
            session_start();
            include_once "modelo/pedido.php";
            include_once "utils/productosLoad.php";

            if(isset($_POST["nombre"],$_POST["selectCategoria"])){
                $nombre = $_POST["nombre"];
                $selectCategoria = $_POST["selectCategoria"];
                ProductoDAO::deleteByName($nombre,$selectCategoria);
            }

            require_once "views/includes/header.php";
            require_once "views/panelAdmin.php";
            require_once "views/includes/footer.php";
        }


        public static function politicas(){
            session_start();
            require_once "views/includes/header.php";
            require_once "views/politicas.php";
            require_once "views/includes/footer.php";
        }

        public static function cookies(){
            session_start();
            require_once "views/includes/header.php";
            require_once "views/cookies.php";
            require_once "views/includes/footer.php";
        }

        public static function aviso(){
            session_start();
            require_once "views/includes/header.php";
            require_once "views/aviso.php";
            require_once "views/includes/footer.php";
        }

    }

?>