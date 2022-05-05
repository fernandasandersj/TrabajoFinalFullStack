<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<div class="cajaGestionarProducto">
    <h1>
        CONTENIDO GENERAL 
    </h1> 
</div>
<?php if(!empty($errores)) :?>
    <div class="errorFormulario">
        <p>
            <?php echo $errores ?>
        </p>
    </div>
<?php endif; ?>
<div class="encabezadoSubirProducto">
    <a href="gestionarGenerico.php">
        <i class="fas fa-arrow-left"></i>
    </a>
   <h3 class="h3SubirProducto"> Subir Producto | Portada </h3> 
</div>
<?php if($subido==true) : ?>
<div class="cajaSubidoCorrectamente">
    <p>
        <?php echo $subido ?>
    </p>  
</div>
<?php endif;  ?>
<div class="cajaInputSubirProductoGenerico">
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" enctype="multipart/form-data">
        <input type="file" name="imagenSubida" >
        <label for="descripcion"> Descripcion de la portada </label>
        <textarea name="descripcion">  </textarea>
        <button type="submit" class="btn_principal" id="subirProducto" name="submit" value="crearNuevo"> 
          Subir Producto Portada
        </button>
</form>
</div>
<?php require_once 'templates/footer.php' ?>