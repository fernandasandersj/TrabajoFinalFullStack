<?php session_start();
require_once '../funciones.php';
require_once 'config.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
if(!isset($_SESSION['usuario'])){
	header('Location:index.php');
}
require_once 'views/gestionarUsuarios.view.php' ; ?>