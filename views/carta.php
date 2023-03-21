<html>

    <head>
        <title>CARTA - Seafood</title> 
    </head>

    <body>
        
        <!-- Page content -->
        <section class="cuadradoPrincipal">
            <div class="cuadrado1">
                <h1>REYNA'S SEAFOOD - LA CARTA</h1>
                <h2 href="#Mariscadas">MARISCADAS</h2>
                <div class="row cuadrado2">
                    <?php foreach ($mariscadas as $producto){ ?>
                        <div class="col-5 cuadradoProducto">
                            <div class="cuadradoImg">  
                                <img src="/p3/<?= $producto->getImagen()?>" alt="Imagenes de las mariscadas">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNombre()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action=<?=base_url."producto/mostrarCarta"?> method="post">
                                    <input type="hidden" name="mariscada" value=<?=$producto->getId()?>>
                                    <button class="boton-personalizado" type="submit"> Añadir </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Pescados">PESCADOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($pescados as $producto){ ?>
                        <div class="col-5 cuadradoProducto"> 
                            <div class="cuadradoImg">  
                                <img src="/p3/<?= $producto->getImagen()?>" alt="Imagenes de los pescdos">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNombre()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action=<?=base_url."producto/mostrarCarta"?> method="post">
                                
                                    <input type="hidden" name="pescados" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> Añadir </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Mariscos">MARISCOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($mariscos as $producto){ ?>
                        <div class="col-5 cuadradoProducto"> 
                            <div class="cuadradoImg">  
                                <img src="/p3/<?= $producto->getImagen()?>" alt="Imagenes de los mariscos">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNombre()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action=<?=base_url."producto/mostrarCarta"?> method="post">
                                
                                    <input type="hidden" name="mariscos" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> Añadir </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Cefalopodos">CEFÁFOLOPOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($cefalopodos as $producto){ ?>
                        <div class="col-5 cuadradoProducto"> 
                            <div class="cuadradoImg">  
                                <img src="/p3/<?= $producto->getImagen()?>" alt="Imagenes de los cefalopodos">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNombre()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action=<?=base_url."producto/mostrarCarta"?> method="post">
                                
                                    <input type="hidden" name="cefalopodos" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> Añadir </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Moluscos">MOLUSCOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($moluscos as $producto){ ?>
                        <div class="col-5 cuadradoProducto" > 
                            <div class="cuadradoImg">  
                                <img src="/p3/<?= $producto->getImagen()?>" alt="Imagenes de los moluscos">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNombre()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action=<?=base_url."producto/mostrarCarta"?> method="post">
                                
                                    <input type="hidden" name="moluscos" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> Añadir </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

            </div>
        </section>
        
    </body>
    
</html>