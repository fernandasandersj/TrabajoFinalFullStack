<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<?php if(!empty($errores)) :?>
        <div class="errorFormularioCorreo">
            <p>
                <?php echo $errores ?>
            </p>
        </div>
<?php endif; ?>
  <?php if(!empty($mensaje)) : ?>
    
        <div class="cajaSubidoCorrectamente" >
            <?php echo $mensaje ?>
        </div>
    <?php endif; ?>
    
<div class="cajaRecuperarContraseña">
    <p>
        Introduce el email asociado a la cuenta. En caso de que lo encontremos en nuestra base de datos, te enviaremos un email.  
    </p>
    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="formularioRecuperarContrasena" >
                <input type="email" placeholder="EMAIL" id="correo" name="email">
            </div>
            <button type="submit" name="submit" class="btn_principal"> 
                Recuperar contraseña 
            </button>
        
    </form>
</div> 
<?php require_once 'templates/footer.php' ?>