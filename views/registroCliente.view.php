<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>

<div class="cajaRecuperarContraseña">
    <p>
        ¡Registrate!
    </p>

    <?php if(!empty($errores)):?>
    <div class="errorFormulario">
        <p>
           <?php echo $errores?>
        </p>
    </div>
    <?php endif;?>
   
    <form action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" id="formulario3" class="formularioRecuperarContrasena" >
        <input type="text" name="usuario" placeholder="Usuario" id="usuario" placeholder="USUARIO">
        <div class="password">
            <input type="password" name="password" placeholder="Contraseña" id="password"> 
            <label for="ojopassword" class="far fa-eye-slash" id="ojoPassword"></label> 
        </div>
        <div class="password">
            <input type="password" name="password2" placeholder="Repite Contraseña" id="password2"> 
            <label for="ojopassword" class="far fa-eye-slash" id="ojoPassword2"></label> 
        </div>
        
        <button type="submit" name="submit"  class="btn_principal"> Registrate </button>
    </form>
</div>

<script src="js/paginaIniciarSesion.js"></script>
<?php require_once 'templates/footer.php' ?>