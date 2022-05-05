<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<!-- Caja recuperar contraseña -->
<div class="cajaRecuperarContraseña">
    <p>
        Introduce el código que hemos mandado a tu email. <br> 
        ¡Recuerda revisar la carpeta de SPAM!
    </p>
    <!-- Formulario  -->
   
    <form action="validarToken.php" class="formularioRecuperarContrasena" >
        <div>
            <label for="Codigo"> Código </label>
            <input type="text" id="codigo" name="codigo">
            
            <input hidden type="text" id="email" name="email" value="<?php echo $email?>">
             <input hidden type="text" id="token" name="token" value="<?php echo $token?>">
        </div>
        
        <button type="submit" name="submit" class="btn_principal"> Recuperar contraseña </button>   
    </form>
</div>
<?php require_once 'templates/footer.php' ?>