<?php require_once 'templates/header.php' ?>

<section class="contacto_s1" id="contacto_s1">

    <h2>
        Contacto
    </h2>

    <p>
        Si estas buscando una ilustracion personalizada para eventos especiales o un regalo, 
        ¡Escribeme!
    </p>
  
    <div id="errorTodosLosCampos"> </div>
  
    <?php if(!empty($errores)) : ?>
        <div class="errorFormularioCorreo">
            <p>
                <?php echo $errores ?>
            </p>
        </div> 
    
    <?php endif;?>

    <?php if($enviado==true) : ?>
        <div class="cajaSubidoCorrectamente">
            <p>
                <?php echo $correcto ?>
            </p>
        </div> 
    
    <?php endif;?>



    <div class="formulario" >
            <div>
                <div class="img1_formulario">
                    <img src="img/img/General/img_contacto.jpg" alt="ilustracion Leia">
                </div>
                <div class="img2_formulario">
                    <img src="img/img/General/img_contacto2.jpg" alt="Acuarela Rasgos">
                </div>
            </div>
            
                <form action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" enctype="multipart/form-data"  name="formulario1" class="form" id="formulario1">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre))echo $nombre ?>" >
                    <input type="text" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo))echo $correo ?>">
                    <input type="text" placeholder="Asunto" name="asunto" id="asunto" value="<?php if(!$enviado && isset($asunto))echo $asunto ?>">
                    <textarea type="text" placeholder="Mensaje" name="mensaje" id="mensaje"><?php if(!$enviado && isset($mensaje))echo $mensaje ?></textarea>
                <button  name="submit" class="btn_principal" id="submitContacto" href="#contacto_s1"> ENVIAR </button >
            </form>
    </div>

</section>

 

<!--  MODAL RESPUESTA -->

<!-- Dado que el mensaje modal solo se verá cuando el archivo esta subido al servidor,comprobar en su momento si funciona. No se puede considerar que la variable $enviado esta en true ya que no tiene donde enviarla. Sin embargo, al introducirse bien los valores del input si se muestra el -->



<div class="ModalRespuestaContacto d-none " id="ModalRespuestaContacto">
    <div class="OverlayRespuestaContacto" id="OverlayRespuestaContacto"></div>
        <div class="ModalTextoContacto" id="ModalTextoContacto">
            <i class="far fa-times-circle" id="close_ModalContacto"></i>
            <h3>
                ¡Tu mensaje se ha recibido correctamente!
            </h3>
            <p>
                Te responderé lo antes posible. 
                Mientras esperas le puedes echar un vistazo a la web 
            </p>
            <a href="index.php" class="btn_principal">
                Volver a la tienda
            </a>
        </div>
    
    </div>
    
  <?php if($enviado ) : ?>
            
            <script src="js/paginaContacto.js"></script>
    <?php endif; ?>

<?php require_once 'templates/footer.php' ?>