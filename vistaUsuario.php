<?php session_start();

require_once 'funciones.php';
require_once 'admin/config.php';


// Se comprueba la conexion
if(!$conexion()){
    header('Location:errorConexion.php');
};




require_once 'views/vistaUsuario.view.php';
?>