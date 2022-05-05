<?php 
require_once 'admin/config.php';
require_once 'funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};

//Consulta para obtener los elementos de la tabla portada 
	
$stmt=$conexion()->prepare("SELECT * FROM portada LIMIT 1 ");
	
$stmt->execute();
	
$portadas=$stmt->fetchAll();
 require_once 'views/index.view.php' ?>