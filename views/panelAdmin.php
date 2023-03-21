<html>

    <head>
        <title>REGISTRO - Seafood</title> 
    </head>

    <body>
        <div class="row espacioFuenteAdmin">
            <div class="col-md d-flex fuentePanelAdmin">
                <form class="form2" action=<?=base_url."producto/agregarProductoAdmin"?> method="post">
                <h1 class="title">AGREGAR PRODUCTO</h1>

                <div class="fuenteTextoRegistro">
                    <input name="nombre" class="input" placeholder="a" required>
                    <label class="label">Nombre</label>
                </div>

                <div class="fuenteTextoRegistro">
                    <input type="number" name="precio" class="input" placeholder="a" required>
                    <label class="label">Precio</label>
                </div>
                <p>Insertar imagen:</p>
                <div class="fuenteTextoRegistro">
                    <input type="file" name="imagen" required>
                </div>

                <p>Elige categoría:</p>
                    <select name="selectCategoria">
                        <option value="1">PESCADOS</option>
                        <option value="2">MARISCOS</option>
                        <option value="3">CEFALOPODOS</option>
                        <option value="4">MOLUSCOS</option>
                        <option value="5">MARISCADAS</option>
                    </select>
                    
                <br><br><br><br>
                <input type="submit" class="botonRegistro" value="AÑADIR PRODUCTO">
                </form>
            </div>

            <div class="col-md d-flex fuentePanelAdmin">
            <form class="form2" action=<?=base_url."producto/updateProductoAdmin"?> method="post">
                <h1 class="title">UPDATE PRODUCTO</h1>

                <div class="fuenteTextoRegistro">
                    <input type="number" name="cod_producto" class="input" placeholder="a" required>
                    <label class="label">ID_Producto</label>
                </div>

                <div class="fuenteTextoRegistro">
                    <input name="nombre" class="input" placeholder="a" required>
                    <label class="label">Nombre</label>
                </div>

                <div class="fuenteTextoRegistro">
                    <input type="number" name="precio" class="input" placeholder="a" required>
                    <label class="label">Precio</label>
                </div>
                <p>Insertar imagen:</p>
                <div class="fuenteTextoRegistro">
                    <input type="file" name="imagen" required>
                </div>

                <p>Elige categoría:</p>
                    <select name="selectCategoria">
                        <option value="1">PESCADOS</option>
                        <option value="2">MARISCOS</option>
                        <option value="3">CEFALOPODOS</option>
                        <option value="4">MOLUSCOS</option>
                        <option value="5">MARISCADAS</option>
                    </select>
                    
                    <br>
                <input type="submit" class="botonRegistro" value="UPDATE PRODUCTO">
                </form>
            </div>

            <div class="col-md d-flex fuentePanelAdmin">
                <form class="form2" action=<?=base_url."producto/eliminarProductoAdmin"?> method="post">
                <h1 class="title">ELIMINAR PRODUCTO</h1>
                <div class="fuenteTextoRegistro">
                    <input type="text" name="nombre" class="input" placeholder="a" required>
                    <label class="label">Nombre</label>
                </div>
                <br>
                <p>Elige categoría:</p>
                    <select name="selectCategoria">
                        <option value="1">PESCADOS</option>
                        <option value="2">MARISCOS</option>
                        <option value="3">CEFALOPODOS</option>
                        <option value="4">MOLUSCOS</option>
                        <option value="5">MARISCADAS</option>
                    </select>
                <br><br><br><br><br><br><br><br><br><br>
                <input type="submit" class="botonRegistro" value="ELIMINAR PRODUCTO">
                </form>
            </div>
        </div>
        
    </body>
</html>