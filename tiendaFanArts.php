<?php 
require_once 'admin/config.php';
require_once 'funciones.php';
//Funcion conexion
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};
//Se llama a la funcion para obtener los productos
$productosPorPagina=$tienda_config['productosPorPagina'];
$productos=$tiendaFanArts($tienda_config['productosPorPagina']);
require_once 'views/tiendaFanArts.view.php' ; ?>