<!DOCTYPE html PUBLIC>
<html>

    <!-- COMIENZO BODY -->
    <body>
        <!-- PRIMERA SECCION MENU-CATEGORIAS -->
        <div class="d-flex justify-content-center body1">
            <div class="cartaInicio">
                <div class="row justify-content-center cartaInicio1" >
                    <div class="col-md-2 d-flex justify-content-center categorias" >
                        <img src=<?=base_url."assets/images/pescados/0.webp"?> alt="Imagen de la categoría pescados">
                        <p><a href=<?=base_url."producto/mostrarCarta#Pescados"?>>PESCADOS</a></p>

                    </div>
                    <div class="col-md-2 d-flex justify-content-center categorias">
                        <img src=<?=base_url."assets/images/mariscos/0.webp"?> alt="Imagen de la categoría mariscos">
                        <p><a href=<?=base_url."producto/mostrarCarta#Mariscos"?>>MARISCOS</a></p>

                    </div>
                    <div class="col-md-2 d-flex justify-content-center categorias">
                        <img src=<?=base_url."assets/images/cefalopodos/0.webp"?> alt="Imagen de la categoría cefalopodos">
                        <p><a href=<?=base_url."producto/mostrarCarta#Cefalopodos"?>>CEFALÓPODOS</a></p>

                    </div>
                </div>

                <div class="row justify-content-center cartaInicio2">
                    <div class="col-md-1 d-flex justify-content-center categorias">
                        <img src=<?=base_url."assets/images/moluscos/0.webp"?> alt="Imagen de la categoría moluscos">
                        <p><a href=<?=base_url."producto/mostrarCarta#Moluscos"?>>MOLUSCOS</a></p>

                    </div>
                    <div class="col-md-1 d-flex justify-content-center categorias">
                        <img src=<?=base_url."assets/images/mariscada/1.webp"?> alt="Imagen de la categoría mariscada">
                        <p><a href=<?=base_url."producto/mostrarCarta#Mariscada"?>>MARISCADA</a></p>
                    </div>
                </div>

            </div>         
        </div>

        <!-- SEGUNDA SECCION EVALUACION -->
        <div class="row body2">

                <div class="col">
                    <h1>- SERVICIO -</h1>
                    <img src=<?=base_url."assets/images/img2/5.webp"?> alt="Imagen del servicio">
                    <p>Un servicio excelente.</p>
                </div>

                <div class="vr mt-4 separador"></div>

                <div class="col invisibleMovil">
                    <h1>- EXPERIENCIA -</h1>
                    <img src=<?=base_url."assets/images/img2/4.webp"?> alt="Imagen de la experiencia">
                    <p>Una experiencia única.</p>
                </div>

                <div class="vr mt-4 separador"></div>

                <div class="col invisibleMovil">
                    <h1>- CALIDAD -</h1>
                    <img src=<?=base_url."assets/images/img2/5.webp"?> alt="Imagen de la calidad">
                    <p>Calidad extraorinária.</p>
                </div>

        </div>

        <!-- TERCERA SECCION INFO -->
        <div class="d-flex body3">
            <img src=<?=base_url."assets/images/img2/street.webp"?> alt="Imagen de fondo de una calle de noche">
            <div class="row justify-content-center textoGps">
                <div class="col-mb-1 cuadradoTexto">
                    <h2>SEAFOOD REYNA'S</h2>
                    <p>
                       Después de conocer el mercado español por más de 4 años, de la ciudad de Barcelona, Seafood Reyna's, 
                       el grupo innovador de este concepto en España, retoma sus raíces y su filosofía de revolucionar la manera de comer mariscada con un nuevo concepto.​
                    </p>
                    <p class="textoInvisibleMovil">
                    Seafood Reyna's es una empresa innovadora que se apasiona por el medio ambiente, los procesos artesanales, la economía local y la comida de alta calidad.
                    Con la política de que: "El cliente tiene rázon".
                    </p>
                    <div class="textoImgMovil">
                        <h2>VISÍTANOS</h2>
                        <a href="https://www.google.es/maps/place/Carrer+Ntra.+Sra.+de+Lourdes,+34,+08750+Molins+de+Rei,+Barcelona/@41.4107529,2.0248571,17z/data=!3m1!4b1!4m5!3m4!1s0x12a49a89d2c52521:0xac0e31f08aacd7a!8m2!3d41.4107489!4d2.0270511?hl=es"><img src=<?=base_url."assets/images/iconos/gps.svg"?> /></a>
                    </div>
                    

                </div>

                <div class="col-mb-1 cuadradoGps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d748.0790605911523!2d2.027186549579784!3d41.41065332705608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49a89d2c52521%3A0xac0e31f08aacd7a!2sCarrer%20Ntra.%20Sra.%20de%20Lourdes%2C%2034%2C%2008750%20Molins%20de%20Rei%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1669579566930!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>

        <!-- QUARTA SECCION INFO -->
        <div class="d-flex body4">
            <img src=<?=base_url."assets/images/img2/street.webp"?> alt="Imagen de fondo de una calle de noche">
            <div class="row justify-content-center textoVideo">

                <div class="col-mb-1 cuadradoVideo">
                    
                    <video controls id="videoJS" src=<?=base_url."assets/video/ReynaSeafood.mp4"?> ></video>
                    
                    <div class="elementoIMG">
                        <a id="imgJS" style="display: none;" href=<?=base_url."producto/mostrarCarta"?>><img src=<?=base_url."assets/images/iconos/logo2.svg"?>></a>   
                    </div>
                
                </div>

                <div class="col-mb-1 cuadradoTextoVideo">
                    <br>
                    <h2>REYNA'S VIDEO</h2>
                    <br>
                    <p>
                        Video promocional de Reyna's Seafood, donde obtendrás una visita guíada a través de tu pantalla/dispositivo.
                    </p>
                    <br><br>
                    <h2 style="align:center">¡VISITA A NUESTRA WEB!</h2>
                    <br>

                    <div class="col-mb-1 cuadradoVideoMovil">
                        <iframe src="https://www.youtube.com/embed/Q-vKPM72as0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> 
                                  
                </div>

                  

            </div>

        </div>

        
    </body>

</html>
