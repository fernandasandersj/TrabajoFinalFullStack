<?php require_once 'templates/header.php' ?>

<!-- Section 1 PRESENTACION | HOME -->
    <section class="s1">
            <div>
                <p>
                    <strong>
                        Celia Golbano
                    </strong> 
                </p>
                <h1>
                    Tienda de arte
                </h1>
                <?php foreach ($portadas as $portada) : ?>
                <h4>
                <?php echo $portada['descripcion'] ?>
                </h4> 
                <?php endforeach; ?>
            </div>
            

            <div class="imgs1">
            <img src="<?php echo $tienda_config['carpetaImg'].$portada['imagen'] ?>" alt="Ilustracion Celia Golbano Acuarela Personalizada">

            </div>

    </section>

    <!-- SECTION 2 TIENDA | HOME  -->

    <section class="section2">

        <a href="tienda.php">
            <h2>
                TIENDA
            </h2>
        </a>
        
        <div class="categorias">
            <a href="tiendaOriginal.php" class="categorias_div">   
                <div>
                    <img src="img/img/OPTIMIZADAS/ORIGINALES/11.jpg" alt="ilustracionflor">
                </div>
                <p> Originales </p>
            </a>
            <a href="tiendaFanArts.php" class="categorias_div">
                <div>
                    <img src="img/img/OPTIMIZADAS/FAN_ARTS/2.jpg" alt="ilustracionflor">
                </div>
                <p> Fan Arts </p>
            </a>
            <a href="tiendaRetrato.php" class="categorias_div">
                <div>
                    <img src="img/img/OPTIMIZADAS/RETRATO/14.jpg" alt="ilustracionflor">
                </div>
                <p> Retratos</p>
            </a>
        </div>

    </section>

    <!-- ESPECIFICACIONES  -->
    
    
    <div class="especificaciones">

        <p>
            Serie limitada y firmada 
            <strong>
                ¡Añade el mensaje que tú quieras!
            </strong>  
        </p>
        <p>
            Ilustraciones <strong>  hechas a mano </strong> y más tarde <strong> digitalizadas </strong>  para obtener el mejor resultado 
        </p>
        <p>
            Técnicas en <strong>  Acuarela y digital </strong>
            ¡ Tú eliges!
        </p>

    </div>

    <!-- SECTION 3 OPINIONES | HOME -->

    <section class="section3" id="opiniones">
        <h2> OPINIONES </h2>

        <div class="OpinionesJS" >
            <div class="opiniones" id="opiniones1">
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Fulanito </strong> </p>
                    </div>
                    <p>
                    La print más bonita del mundo quiero comprar 30 mas pero no tengo pared suficiente 
                    </p>
                </div>
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Fulanito </strong> </p>
                    </div>
                    <p>
                    La print más bonita del mundo quiero comprar 30 mas pero no tengo pared suficiente 
                    </p>
                </div>
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Fulanito </strong> </p>
                    </div>
                    <p>
                    La print más bonita del mundo quiero comprar 30 mas pero no tengo pared suficiente 
                    </p>
                </div>
            </div>
            <div class="opiniones d-none" id="opiniones2">
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Zack </strong> </p>
                    </div>
                    <p>
                    Ojala hiciese Stickers!!
                    llego rapido y super bien envuelto
                    </p>
                </div>
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Elena </strong> </p>
                    </div>
                    <p>
                    El retrato de mi perro a mi madre le encantó!
                    Repetiré seguro. 
                    </p>
                </div>
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Marcos </strong> </p>
                    </div>
                    <p>
                    Quizás tarda un poco pero vale la pena 
                    </p>
                </div>
            </div>
            <div class="opiniones d-none" id="opiniones3" >
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Juan </strong> </p>
                    </div>
                    <p>
                    ¡Que pasada! La calidad es genial. Super fan de todo
                    </p>
                </div>
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Sofia </strong> </p>
                    </div>
                    <p>
                    Todo genial Celia es super maja
                    </p>
                </div>
                <div>
                    <div class="persona">
                        <div>
                            <img src="img/img/Women.png" alt="imagen persona">
                        </div>
                        <p> <strong> Andrea </strong> </p>
                    </div>
                    <p>
                    Hay que apoyar al comercio pequeño! Encargué un retrato y quedo espectacular. 
                    </p>
                </div>
            </div>
        </div>
        <div class="cajaOpinionesbtn">
            <div class="btnOpinion" >
                <i id="btnOpinion1" class="far fa-circle"></i>
            </div>
            <div class="btnOpinion" >
                <i id="btnOpinion2" class="far fa-circle"></i>
            </div>
            <div class="btnOpinion" >
                <i id="btnOpinion3" class="far fa-circle"></i>
            </div>
            
        </div>
        </section >

        <!-- SECTION 4 QUIEN SOY | HOME -->

        <section class="section4" id="quienSoy">
            <h2>
                QUIEN SOY
            </h2>

            <div class="img_sect4">
                <div > 
                    <img src="img/img/General/logo.png" alt="Celia Golbano logo">
                </div>
                <p>
                ¡Hola! Soy Celia, artista 2D y 3D.  
                En mis trabajos plasmo ambas facetas dándoles  una nueva dirección que se identifique conmigo.
                </p>
            </div>

            <div class="img2_sect4">
                <p>
                Espero que disfrutes de las ilustraciones tanto como yo creándolas y sueñes con mundos de fantasía, tinta y color.
                
                </p>
                
                <div > 
                    <img src="img/img/General/logo2.png" alt="Celia Golbano logo">
                </div>
            </div>

        </section>

    </div>
<script src="js/opiniones.js"></script>
<?php require_once 'templates/footer.php' ?>