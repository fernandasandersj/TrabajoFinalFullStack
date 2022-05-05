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
$errores='';
$subido=false;
if(isset($_POST['submit'])){
	$descripcion=filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    
    if(empty($descripcion)){
		$errores.='Debes insertar la descripcion';
	}
    if(empty($_FILES["imagenSubida"]['tmp_name'])){
		$errores.='Debes seleccionar una imagen ';
	}else{
		$comprobar=getimagesize($_FILES["imagenSubida"]['tmp_name']);
		if($comprobar==false){
			$errores='El archivo debe ser de tipo imagen';
		}
	}
}
//PREPARAMOS LA CONSULTA Y SUBIMOS LOS DATOS A LA BASE DE DATOS
if(empty($errores)){
	if(!empty($_FILES["imagenSubida"]["tmp_name"])){
		$comprobar=getimagesize($_FILES['imagenSubida']['tmp_name']);
	
	
	if($comprobar!=false){
	
		 $rutaArchivo=$admin_config['carpetaImg'].$_FILES['imagenSubida']['name'];
	 	move_uploaded_file($_FILES['imagenSubida']['tmp_name'], $rutaArchivo);
		
		 
		 $stmt=$conexion()->prepare('INSERT INTO portada(id,imagen,descripcion) VALUES(null,:imagen,:descripcion)');
		 $stmt->execute([
			 ':imagen'=>$rutaArchivo,
			 ':descripcion'=>$descripcion,
			 
		 ]);
		echo 'correcto';
		$subido=true;
		$subido='La portada se ha subido correctamente';
	}
		
    };
   
    
}
require_once 'views/subirProductoGenerico.view.php';
?>