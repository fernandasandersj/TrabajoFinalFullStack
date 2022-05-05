<?php  
require_once 'admin/config.php';
require_once 'funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:errorConexion.php');
};
require_once 'views/envio.view.php' ?>