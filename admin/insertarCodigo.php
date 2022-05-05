<?php 
require_once '../funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
if(isset($_GET['email']) && isset($_GET['token'])){
    $email=$_GET['email'];
    $token=$_GET['token'];
}else{
    header('Location:validarToken.php');
};
require_once 'views/insertarCodigo.view.php';
?>