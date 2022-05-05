<?php 
require_once 'admin/config.php';
require_once 'funciones.php';
$errores='';
$correcto='';
$enviado=false;
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST'){
    // echo '<script src="js/validacionFomulario.js"></script>';
    $nombre=filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    $correo=filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
    $asunto=filter_var($_POST['asunto'],FILTER_SANITIZE_STRING);
    $mensaje=filter_var($_POST['mensaje'],FILTER_SANITIZE_STRING);
    if(empty($nombre)){
        $errores.=' ¡UPS!  Por favor, introduce un nombre correcto !';
    }
    if(empty($correo)){
        $errores.= 'Por favor, introduce un email correcto !';
    }
    if(empty($asunto)){
        $errores.=' Por favor, introduce un asunto correcto !';
    }
    if(empty($mensaje)){
        $errores.=' Por favor, introduce un mensaje correcto !';
    }
    // En caso de que no haya ningun error se podra enviar el formulario al email elegido
    if(empty($errores)){
        // echo 'correcto';
    
        $a_quien='contacto@celiagolbano.com';
        $asunto='Esto es una copia de tu mensaje | Formulario Contacto de la tienda www.celiagolbano.com';
        $mensaje_a_enviar =' Enviado desde la web ';
        $mensaje_a_enviar.=" De: $nombre ";
        $mensaje_a_enviar.=" Asunto: $asunto ";
        $mensaje_a_enviar.=" Mensaje: $mensaje ";
        mail($a_quien,$asunto,$mensaje_a_enviar);
        $enviado=true;
        $correcto.='Hemos recibido tu mensaje correctamente';
        
        
    }
  //  if($enviado==true){
    //    echo '<script src="js/paginaContacto.js"></script>';
    //}
}
require_once 'views/contacto.view.php'; 
?>
