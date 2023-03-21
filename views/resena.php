<html>

    <head>
        <title>REGISTRO - Seafood</title> 
    </head>

    <body onload ="mostrarResena();">
        
        <div class="cuadradoPrincipal">
            <h1 style="text-align: left;">RESEÑAS</h1>

            <p style="float: left; margin-right: 5px;">Filtro: </p>
            <select name="filtro" id="filtro">
                <option value="ASC">De menor a mayor</option>
                <option value="DES">De mayor a menor</option>
            </select>

            <br><br>

            <div class="row tablaResena" id="listaResena" style="margin: 0px;">
                
            </div>

            <?php if(isset($_SESSION["login"])){ ?>
                <div class="fuenteRegistro" style="height: 70vh;margin-top: 4vh;">
                    
                    <form class="form" method="post" id="formulario" style="margin-bottom: 0px;">
                    <h1 class="title">VALORACIÓN</h1>
                
                    <p style="float: left;margin-right: 5px;margin-bottom: 0px;">Num pedido: </p>
                    <select id="cod">
                        <?php for($i = 0; $i<count($pedidoID); $i++){ ?>
                            <option value="<?=$pedidoID[$i]?>" required><?=$pedidoID[$i]?></option>
                        <?php } ?>
                    </select>

                    <p class="clasificacion">
                        <input id="radio1" type="radio" name="estrellas" value="5">
                            <label for="radio1">★</label>
                        <input id="radio2" type="radio" name="estrellas" value="4">
                            <label for="radio2">★</label>
                        <input id="radio3" type="radio" name="estrellas" value="3">
                            <label for="radio3">★</label>
                        <input id="radio4" type="radio" name="estrellas" value="2">
                            <label for="radio4">★</label>
                        <input id="radio5" type="radio" name="estrellas" value="1">
                            <label for="radio5">★</label>
                    </p>

                    <textarea id="comentarioResena" rows="4" cols="32" type="text" placeholder="Escribe tu reseña . . ."></textarea>
                    
                    <button type="button" class="botonRegistro" onclick="valoracionUser()">Crear reseña</button>
                    </form>
                </div>
            <?php }else {?>
                <a href="<?=base_url."usuario/sesion"?>"><button type="button" class="boton-personalizado4" style="height: 40px;width:100%">Inicia sesión para crear una reseña!!</button></a>
            <?php } ?>

        </div>
        
        
    </body>
    
</html>