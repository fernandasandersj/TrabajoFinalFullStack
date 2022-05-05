<?php 
require_once 'admin/config.php';
require_once 'funciones.php';
//Consulta conexion
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};
//Se llama a la funcion para obtener los productos
$productosPorPagina=$tienda_config['productosPorPagina'];
$productos=$tiendaRetrato($tienda_config['productosPorPagina']);
require_once 'views/tiendaRetrato.view.php' ; ?>