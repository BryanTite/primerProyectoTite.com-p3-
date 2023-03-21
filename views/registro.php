<html>

    <head>
        <title>REGISTRO - Seafood</title> 
    </head>

    <body>
        
        <div class="fuenteRegistro">
            <form class="form" method="post">
            <h1 class="title">REGÍSTRATE</h1>
				<p class="textoRegistro">Tienes ya una cuenta? <a href=<?=base_url."usuario/sesion"?>>INICIA SESIÓN</a></p>

            <div class="fuenteTextoRegistro">
                <input type="email" name="email" class="input" placeholder="a" required>
                <label class="label">Email</label>
            </div>

            <div class="fuenteTextoRegistro">
                <input type="password" name="password" class="input" placeholder="a" minlength="4" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="Mínimo de 5 carácteres y 1 número." required>
                <label class="label">Password</label>
            </div>

            <div class="fuenteTextoRegistro">
                <input type="text" name="nombre" class="input" placeholder="a" required>
                <label class="label">Nombre</label>
            </div>

            <div class="fuenteTextoRegistro">
                <input type="text" name="apellidos" class="input" placeholder="a">
                <label class="label">Apellidos</label>
            </div>
				
			<div class="fuenteTextoRegistro">
                <input type="number" name="telefono" class="input" placeholder="a">
                <label class="label">Teléfono</label>
            </div>

            <input type="submit" class="botonRegistro" value="NUEVA SESIÓN">
            </form>
        </div>
        
    </body>
</html>