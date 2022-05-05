<?php session_start();
require_once '../funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
/* Compruebo si la sesion esta iniciada o no. En caso de que esté iniciada redirijo directamente a la zona del ADMIN en caso contrario, le pido iniciar sesion. */
if(isset($_SESSION['usuario'])){
    header('Location:gestionarProductos.php');
}
$errores="";
// En caso de que la sesion no este iniciada, se procede a la validacion del formulario. Se hasea el password para encriptarlo
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST'){
    $usuario=filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $pass=hash('sha512',$_POST['password']);

    // Se comprueba la conexion
    if(!$conexion()){
		header('Location:../errorConexion.php');
	};
    //Se envia la consulta al servidor
    $stmt=$conexion()->prepare('SELECT * FROM usuarios WHERE usuario=:usuario AND pass=:pass');
    $stmt->execute([
        ':usuario'=>$usuario,
        ':pass'=>$pass,
    ]);
    $resultado=$stmt->fetch();
    //El resultado nos dira si el usuario existe en la base de datos. En caso afirmativo devuelve true de lo contrario devuelve false. Por ello, En caso de que NO sea false, podremos acceder al contido especifico del admin
    if($resultado!=false){
        $_SESSION['usuario']=$usuario;
        header('Location:index.php');
    }else {
        $errores.='¡UPS!  Por favor, introduce un correo o una contraseña correctos !';
        
    }
}
require_once 'views/index.view.php';
?>