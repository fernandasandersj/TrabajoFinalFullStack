<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<!-- Contenido Generico -->
<div class="cajaGestionarProducto">
    <h1>
        GESTIONAR CONTENIDO GENERICO | PORTADA
    </h1> 
</div>
    <a href="subirProductoGenerico.php" class="btn_principal">
        Nuevo Portada
    </a>
    
<!-- Menu clasificatorio -->
<div class="menu_seleccion">
    <p>ID</p>
    <p>Imagen</p>
    <p>Texto Portada</p>
</div>
<?php foreach ($portadas as $portada) : ?>
            <div class="div_gestionarProducto">
                <p> <?php echo $portada['id'] ?> </p> 
                <p> <?php echo $portada['imagen'] ?> </p> 
                <p> <?php echo $portada['descripcion'] ?> </p>
                <div>
                    <a class="btn_admin_Gproductos" href="editarGenerico.php?id=<?php echo $portada['id'] ?>" >Editar</a> 
                    <a class="btn_admin_Gproductos" href="eliminarGenerico.php?id=<?php echo $portada['id']?>" >Eliminar</a>
                </div>
            </div>
<?php endforeach;?>

<?php include_once 'paginacionContenidoG.php' ?>
<?php require_once 'templates/footer.php' ?>