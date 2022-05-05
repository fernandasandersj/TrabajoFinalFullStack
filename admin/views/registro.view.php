<?php require_once 'templates/header.php ' ?>

<?php require_once 'templates/nav.php' ?>

<div class="cajaRecuperarContraseña">

    <p>
        Es momento de cambiar la contraseña
    </p>

   
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " class="formularioRecuperarContrasena" >
        <input type="text" placeholder="NOMBRE">
        <input type="text" placeholder="EMAIL">
        <input type="text" placeholder="PASSWORD">
        <input type="text" placeholder="REPITE PASSWORD">
        <button class="btn_principal"> Cambiar contraseña </button>
    </form>
</div>



<?php require_once 'templates/footer.php' ?>