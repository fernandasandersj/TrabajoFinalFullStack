<?php 
require_once 'admin/config.php';
require_once 'funciones.php';
//Funcion Conexion
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};
//Se llama a la funcion para obtener los productos
$productos=$obtenerProductos($tienda_config['productosPorPagina']);
require_once 'views/tienda.view.php' ?>