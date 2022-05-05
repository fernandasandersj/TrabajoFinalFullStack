<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
    
<div>
<?php if($correcto) :?> 
    
    <form action="cambiarPassword.php" method="POST" class="formularioRecuperarContrasena" >
        <div>
            <label for="exampleInputPassword1"> Password</label>
            <input type="password"  id="exampleInputPassword1" name="pass">
        </div>
        <div>
            <label for="exampleInputPassword2" >Confirmar Password</label>
            <input type="password"  id="exampleInputPassword2" name="pass2">
        </div>
        <input hidden type="text" id="exampleInputPassword2" name="email" value="<?php echo $email ?>">
                    
        <button type="submit" name="cambiar" class="btn btn-dark ">Cambiar contraseña</button>
    </form>
    <?php else:?>
    <div >
        <div class="errorFormularioCorreo" >
            <?php echo $mensaje ?>
        </div>
    </div>
    <?php endif;?>
</div>
<?php include_once 'template/footer.php' ; ?>