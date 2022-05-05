<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<!-- Pagina editar producto  -->
<div class="cajaGestionarProducto">
    <h1>
        GESTIONAR PRODUCTOS
    </h1> 
</div>
<!-- Mensaje de error -->
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
   <h3 class="h3SubirProducto"> Editar Producto</h3> 
</div>
<!-- Mensaje de subido  -->
<?php if($subido==true) : ?>
<div class="cajaSubidoCorrectamente">
    <p>
        <?php echo $subido ?>
    </p>  
</div>
<?php endif;  ?>
<!-- Formulario  -->
<div class="cajaInputSubirProducto">
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST" enctype="multipart/form-data">
        
        <input type="text" name="id" value="<?php echo $producto['id'] ?>">
        <input type="text" placeholder="Titulo" name="titulo">
        <input type="text" placeholder="Tamaño Producto" name="tamanio">
        <input type="text" placeholder="Categoria" name="categoria">
        <input type="text" placeholder="Precio" name="precio">
        <input type="text" placeholder="Ejemplares" name="ejemplares">
        <input type="file" name="imagenSubida" >
        <input type="text" name="imagenGuardada" placeholder="Imagen Obtenida" value="<?php echo $producto['imagen'] ?>" >
        
        <textarea name="descripcion" placeholder="Descripcion del producto"></textarea>
        <button type="submit" class="btn_principal" id="subirProducto" name="submit" value="editar"> 
          Editar Producto 
        </button>
</form>
</div>

<?php require_once 'templates/footer.php' ?>