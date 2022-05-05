<?php 
$para=$email ; 
    // título
    $título = 'Restablecer Contraseña';
    $codigo= rand(1000,9999);
    // mensaje
    $mensaje = '
    <html>
    <head>
      <title>Restablecer contraseña</title>
    </head>
    <body>
        <h1>RESTABLECER CONTRASEÑA</h1>
        <div>
            <p><strong>Copia el código para restablecer la contraseña</strong></p>
            <h3>'.$codigo.'</h3>
            <p> <a 
                href="http://www.celiagolbano.es/admin/insertarCodigo.php?email='.$email.'&token='.$token.'"> 
                Para restablecer da click aquí </a> </p>
            <p> <small>Si no has solicitado restarurar la contraseña, por favor ignora este correo</small> </p>
        </div>
    </body>
    </html>
    ';
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Enviarlo
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;
}
require_once 'views/insertarCodigo.view.php';
?>