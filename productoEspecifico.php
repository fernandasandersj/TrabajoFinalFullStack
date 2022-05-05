<?php  
require_once 'admin/config.php';
require_once 'funciones.php';
//Funcion COnexion
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};
//Se obtiene el id de la URL para poder enseñar el producto el cual se pincha 
$id=isset($_GET['id']) ? (int)$_GET['id'] : false;
//Consulta al servidor para buscar dicho producto en su tabla especifica
$stmt=$conexion()->prepare('SELECT * FROM productos WHERE id=:id LIMIT 1');
$stmt->execute([
	':id'=>$id,
]);
$producto=$stmt->fetch();
//EN cas de que no haya ningun producto volver a la pagina principal
if(!$producto){
	header('Location:index.php');
}
//En caso de que no se encuentre la ID (por seguridad, por ejemplo para que nadie meta la id que no existe en la URL)
if(!$id){
	header('Location:index.php');
}
require_once 'views/productoEspecifico.view.php' ?>