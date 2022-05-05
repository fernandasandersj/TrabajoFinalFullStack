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
// $productos=$obtenerProductos($admin_config['productosPorPagina']);
// if(!$productos){
// 	header('Location:index.php');
// }
$stmt=$conexion()->prepare("SELECT * FROM portada ");
	
$stmt->execute();
	
$portadas=$stmt->fetchAll();
require_once 'views/gestionarGenerico.view.php' ?>