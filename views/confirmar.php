<html>
	<head>

        <title>CARRITO - Reyna's Seafood</title>
 
    </head>

    <body>

        <h1 class="confimarPedidoh1">CONFIRMACIÓN DEL PEDIDO</h1>
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
                        <img src="/p3/<?=$producto->getProducto()->getImagen()?>" alt="Imágenes de los productos comprados">
                    </div>
                    <div class="col-12 col-md-3 nomProducto">
                        <?=$producto->getProducto()->getNombre()?>
                    </div>
                        
                    <div class="col-12 col-md-3 cantidadBotones">
                        <?=$producto->getCantidad()?>
                    </div>
                    <div class="col-12 col-md-3 precioProducto">
                        <p><?=$producto->getProducto()->getPrecio()?>€</p>
                    </div>
                        
                <?php $pos++;
                }?>

            </div>
        </div>    
        <div class="row finalizar">
            <div class="col-6 col-md-3 finalizarCompra" style="background: #5A0C2A;border: 1px solid;">
            	<p style="margin: 9px;color: white;">PRECIO TOTAL DEL PEDIDO </p>
            </div>

            <div class="col-6 col-md-3 nada"></div>
            <div class="col-6 col-md-3 nada"></div>

            <div class="col-6 col-md-3 precioFinalProducto">
                <?php
                echo $precioTotal."€";?>                        
            </div>
        </div>
        
    </body>
    
</html>