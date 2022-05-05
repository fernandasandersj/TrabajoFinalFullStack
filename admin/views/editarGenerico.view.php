<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<!-- Pagina de edicion del contenido generico de la pagina -->
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
<!-- Encabezado  -->
<div class="encabezadoSubirProducto">
    <a href="gestionarGenerico.php">
        <i class="fas fa-arrow-left"></i>
    </a>
   <h3 class="h3SubirProducto"> Editar Producto | Portada </h3> 
</div>
<!-- Mensaje de mensaje subido  -->
<?php if($subido==true) : ?>
<div class="cajaSubidoCorrectamente">
    <p>
        <?php echo $subido ?>
    </p>  
</div>
<?php endif;  ?>
<!-- Formulario -->
<div class="cajaInputSubirProductoGenerico">
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" enctype="multipart/form-data">
        
        <input type="text" name="id" value="<?php echo $portada ['id'] ?>">
        <input type="file" name="imagenSubida" >
        <input type="text" name="imagenGuardada" placeholder="Imagen Obtenida" value="<?php echo $portada['imagen'] ?>" >
        <label for=""> Descripcion de la portada </label>
        <textarea name="descripcion">  </textarea>
        <button type="submit" class="btn_principal" id="subirProducto" name="submit" value="crearNuevo"> 
          Editar Producto Portada
        </button>
</form>
</div>
<?php require_once 'templates/footer.php' ?>