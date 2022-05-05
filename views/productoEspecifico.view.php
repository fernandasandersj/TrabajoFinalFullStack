<?php require_once 'templates/header.php' ?>
<script src="js/btnFavorito.js"></script>

<!-- Presentacion del producto especifico -->

<article class="ProductoEspecifico">
    
<!-- Boton para volver en la misma pagina. Sobre todo pensado para movil -->
    <a href="tienda.php" class="btn_atras">
        <i class="fas fa-arrow-left"></i>
    </a>

<!-- Producto que se obtiene por ID -->

    <div class="Sect1ProductoEspecifico" id="Sect1ProductoEspecifico">
        <div class="imagenProductoEspecifico">

            <img src="<?php echo $tienda_config['carpetaImg'].$producto['imagen'] ?>" alt="Ilustracion Celia Golbano Acuarela Personalizada">
		
        </div>
        <button class="productoFavorito" id="productoFavorito">
            <i class="far fa-heart"></i>
        </button>
        <button class="btn_principal">
            Añadir al Carrito
        </button>
    </div>

    <div id="textoProductoEspecifico">
        <h4>
            <?php echo $producto['titulo'] ?>
        </h4>
        <p>
            <?php echo $producto['descripcion'] ?>
        </p>
        <p>
            Número de ejemplares: <?php echo $producto['ejemplares'] ?>
        </p>
        <div class="cantidad">
            <div >
               <i id="decremento" class="fas fa-minus"></i> 
            </div>
            <p id="numero"> </p>
            <div class="incremento" >
               <i id="incremento" class="fas fa-plus"></i> 
            </div>
             

            
              <script>

                 var incremento=document.querySelector("#incremento");
                 var numero=document.querySelector("#numero");

                    let n=0;

                    incremento.addEventListener('click',(ev)=>{                         
                       
                        if(n<5){
                             n++
                            // document.write( n );
                            numero.innerHTML=n;
                        }
                    });

                    decremento.addEventListener('click',(ev)=>{                         
                       
                        if(n>1){
                             n--
                            // console.log(n)
                            numero.innerHTML=n;
                        }
                    });

                    numero.innerHTML=n;
                  
              </script>    

            
        </div>
            <p>Tamaño disponible: <?php echo $producto['tamanio'] ?> </p>

    

    </div>
    

</article>

<!-- <script src="js/productoEspecifico.js"></script> -->

<?php require_once 'templates/footer.php' ?>