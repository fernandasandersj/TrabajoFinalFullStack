<?php require_once 'templates/header.php' ?>
<!-- Mensaje de Errores -->
<?php if(!empty($errores)):?>
    <div class="errorFormulario">
        <p>
           <?php echo $errores?>
        </p>
    </div>
<?php endif;?>
<!-- Pagina para iniciar sesion que sea el index de la parte del Admin -->
    <div class="cajaIniciarSesion">
        <h3>
            INICIA SESION | ADMIN
        </h3>
        <form action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" id="formulario2">   
            <input type="text" name="usuario" placeholder="Usuario" id="usuario">
            <div class="password">
                <input type="password" name="password" placeholder="Contraseña" id="password"> 
                <label for="ojopassword" class="far fa-eye-slash" id="ojoPassword"></label> 
            </div>
        
            <button type="submit" name="submit"  class="btn_principal">
                Iniciar sesion
            </button>
        </form>
        <a href="recuperarContrasena.php"> ¿Has olvidado tu contraseña? </a>
    
        
    </div>
<script src="../js/paginaIniciarSesion.js"></script>
<?php require_once 'templates/footer.php' ?>