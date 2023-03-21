<html>
	<head>

        <title>CARRITO - Reyna's Seafood</title>
 
    </head>

    <body>

        <h1></h1>
        <div class="carritoPrincipal">
            <div class="row categoriasProductos">
                <h2 class="col-12 col-md-3"></h2>
                <h2 class="col-12 col-md-3">PRODUCTOS</h2>
                <h2 class="col-12 col-md-3">CANTIDAD</h2>
                <h2 class="col-12 col-md-3">PRECIO</h2>
            </div>

            <div class="row categoriasProductos2">
                <h2 class="col-12 col-md-3">CARRITO</h2>
            </div>

            <div class="row tableCarrito">
                <?php
                
                $pos = 0;
                foreach($_SESSION["compra"] as $producto){?>
                    
                    <div class="col-12 col-md-3 imgProducto">
                        <img src="/p3/<?=$producto->getProducto()->getImagen()?>" alt="Imágenes de los productos en carrito">
                    </div>
                    <div class="col-12 col-md-3 nomProducto">
                        <?=$producto->getProducto()->getNombre()?>
                    </div>
                        
                    <div class="col-12 col-md-3 cantidadBotones">
                        <form action="" method="post">
                        
                            <input type="hidden" name="pos" value=<?=$pos?>>
                            <button class="boton-personalizado2" type="submit" name="Add"> + </button>
                            <?=$producto->getCantidad()?>
                            <button class="boton-personalizado2" type="submit" name="Del"> - </button>
                        
                        </form>
                    </div>
                    <div class="col-12 col-md-3 precioProducto">
                        <p><?=$producto->getProducto()->getPrecio()?>€</p>
                    </div>
                        
                <?php $pos++;
                }?>

            </div>
        </div>    
        <div class="row finalizar">
            <div class="col-6 col-md-3 finalizarCompra">
                <form action="" method="post">
                    <button class="boton-personalizado3" type="submit" name="finalizarCompra"><a href=<?=base_url."producto/confirmarPedido"?>>FINALIZAR COMPRA </a></button>
                </form>
            </div>

            <div class="col-6 col-md-3 nada"></div>
            <div class="col-6 col-md-3 nada">
                <p>*IVA incluido en el pedido*</p>
            </div>

            <div class="col-6 col-md-3 precioFinalProducto">
                <?php $precioTotal = calcularPrecio::calcularPrecioFinal($_SESSION["compra"]);
                $_SESSION["precio"] = $precioTotal;
                echo $precioTotal."€";?>                        
            </div>
        </div>
        
    </body>
    
</html>