<?php require_once 'templates/header.php' ?>

<h1 class="h1_Tienda">
    Tienda de ilustraciones
</h1>

<!-- MENU CATEGORIAS -->

<div class="cajaTiendaTipos">
    <a href="tienda.php" style="font-weight: bold;"> TODO </a>
    <a href="tiendaOriginal.php"> ORIGINAL </a>
    <a href="tiendaFanArts.php">FAN ARTS </a>
    <a href="tiendaRetrato.php"> RETRATOS </a>
</div>

<!-- Producto Se crea un bucle para enseñar solo aquellos que esten en la tabla de productos -->

    <div class="cajaProductoTienda">
    <?php foreach ($productos as $producto) : ?>
        <div class="productoTienda">
            <a href="productoEspecifico.php?id=<?php echo $producto['id'] ?>" class="imgProductoTienda">
                <img src="<?php echo $tienda_config['carpetaImg'].$producto['imagen'] ?>" alt="Ilustracion Celia Golbano Acuarela Personalizada">
            </a>
            <div class="iconosTienda">
                <button>
                    <i class="far fa-heart"></i>
                </button>
                <button>
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
            <p>
                <?php echo $producto['titulo'] ?>
            </p>
            <p> 
                <?php echo $producto['precio'] ?> €
            </p>
            
        </div>
<?php endforeach; ?>
</div>


<?php include_once 'paginacion.php' ?>
<?php require_once 'templates/footer.php' ; ?>