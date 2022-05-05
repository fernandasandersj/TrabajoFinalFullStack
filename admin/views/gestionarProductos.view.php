<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/nav.php' ?>
<!-- Gestionar productos -->
<div class="cajaGestionarProducto">
    <h1>
        GESTIONAR PRODUCTOS
    </h1> 
</div>
    <a href="subirProducto.php" class="btn_principal">
        Nuevo Producto
    </a>
<!-- Menu clasificatorio -->
<div class="menu_seleccion">
    <p>ID</p>
    <p>Titulo</p>
    <p>Tamaño</p>
    <p>Categoria</p>
    <p>Precio</p>
    <p>Ejemplares</p>
    <p>Descripcion</p>
</div>
        <?php foreach($productos as $producto) : ?>
            <div class="div_gestionarProducto">
                <p> <?php echo $producto['id'] ?></p> 
                <p> <?php echo $producto['titulo'] ?></p>
                <p> <?php echo $producto['tamanio'] ?></p>
                <p> <?php echo $producto['categoria'] ?></p>
                <p> <?php echo $producto['precio'] ?></p>
                <p> <?php echo $producto['ejemplares'] ?></p>
                <p> <?php echo $producto['descripcion'] ?></p>
                <div>
                    <a class="btn_admin_Gproductos" href="editarProducto.php?id=<?php echo $producto['id'] ?>" >Editar</a> 
                    <a class="btn_admin_Gproductos" href="eliminarProducto.php?id=<?php echo $producto['id']?>" >Eliminar</a>
                    <a class="btn_admin_Gproductos" href="../productoEspecifico.php?id=<?php echo $producto['id'] ?>" ">Ver</a> 
                </div>
            </div>
        <?php endforeach; ?>

<?php include_once 'paginacion.php' ?>        
<?php require_once 'templates/footer.php' ?>