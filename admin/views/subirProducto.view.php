<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<div class="cajaGestionarProducto">
    <h1>
        GESTIONAR PRODUCTOS
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
    <a href="gestionarProductos.php">
        <i class="fas fa-arrow-left"></i>
    </a>
   <h3 class="h3SubirProducto"> Subir Producto</h3> 
</div>
<?php if($subido==true) : ?>
<div class="cajaSubidoCorrectamente">
    <p>
        <?php echo $subido ?>
    </p>  
</div>
<?php endif;  ?>
<div class="cajaInputSubirProducto">
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="Titulo" name="titulo"  >
        <input type="text" placeholder="Tamaño Producto" name="tamanio">
        <input type="text" placeholder="Categoria" name="categoria" >
        <input type="text" placeholder="Precio" name="precio">
        <input type="text" placeholder="Ejemplares" name="ejemplares">
        <input type="file" name="imagenSubida" >
        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripcion del producto">  </textarea>
        <button type="submit" class="btn_principal" id="subirProducto" name="submit" value="crearNuevo"> 
          Subir Producto 
        </button>
</form>
</div>
<?php require_once 'templates/footer.php' ?>