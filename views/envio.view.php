<?php require_once 'templates/header.php' ?>

<!-- Section 1 -->

<!-- PAGINA QUE SE UTILIZARA PARA IR FINALIZANDO LA COMPRA | ELECCION DE LOS METODOS DE ENVIO  -->

<section class="cajaMetodoEnvio">
    <h3> METODOS DE ENVIO </h3>
    <p>
        Actualmente los pedidos solo se pueden recoger en la tienda física.
    </p>    
    <p>
        El pedido se reserva durante 10 días. Pasado ese tiempo, el pedido se cancelará automáticamente con los cargos de cancelación. 
    
    </p>
    
    <p>
         <strong> Calle Walaby 42, Sidney . </strong>
    </p>
</section>

<!-- Section 2 -->

<section class=cajaMetodoEnvio>
    <h3> Pago </h3>
        <form action="#" method="POST">
            <input type="radio" name="envio">
            <label for="#">
                Pago en tienda
            </label>
            
            <input type="radio" name="envio">
            <label for="#">
                Bizum
            </label>
        </form>

        <span> *En caso de pago a través de Bizum una vez recibido el pago se mandará un email con la corfimacion del pedido</span>

    <button class="btn_principal" type="submit" name="submit">
            Finalizar pedido
    </button>
</section>


<?php require_once 'templates/footer.php' ?>