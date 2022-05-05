<?php session_start();
require_once 'config.php';
require_once '../funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
// COMPROBAR SI HAY SESION ABIERTA
if(!isset($_SESSION['usuario'])){
	header('Location:index.php');
}
$id=$recogerId($_GET['id']);
if(!$id){
    header('Location:index.php');
}
// Consulta para eliminar el articulo
$stmt=$conexion()->prepare('DELETE FROM portada WHERE id=:id');
	$stmt->execute([
		':id'=>$id,
]);
header('Location:index.php');
?>