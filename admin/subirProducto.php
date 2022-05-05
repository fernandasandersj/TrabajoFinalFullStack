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
    $titulo=filter_var($_POST['titulo'],FILTER_SANITIZE_STRING);
    $tamanio=filter_var($_POST['tamanio'],FILTER_SANITIZE_STRING);
    $categoria=filter_var($_POST['categoria'],FILTER_SANITIZE_STRING);
    $precio=filter_var($_POST['precio'],FILTER_SANITIZE_STRING);
    $ejemplares=filter_var($_POST['ejemplares'],FILTER_SANITIZE_STRING);
	$descripcion=filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    
  
    if(empty($titulo)){
		$errores.='Debes insertar el titulo ';
	}
    if(empty($tamanio)){
		$errores.='Debes insertar el tamaño ';
	}
    if(empty($categoria)){
		$errores.='Debes insertar la categoria';
	}
    if(empty($precio)){
		$errores.='Debes insertar el precio';
	}
    if(empty($ejemplares)){
		$errores.='Debes insertar e numero de ejemplares ';
	}
    if(empty($descripcion)){
		$errores.='Debes insertar la descripción';
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
		
		 
		 $stmt=$conexion()->prepare('INSERT INTO productos(id,titulo,tamanio,categoria,precio,ejemplares,descripcion,imagen) VALUES(null,:titulo,:tamanio,:categoria,:precio,:ejemplares,:descripcion,:imagen)');
		 $stmt->execute([
			 ':titulo'=>$titulo,
			 ':tamanio'=>$tamanio,
			 ':categoria'=>$categoria,
			 ':precio'=>$precio,
			 ':ejemplares'=>$ejemplares,
			 ':descripcion'=>$descripcion,
			 ':imagen'=>$rutaArchivo,
		 ]);
		echo 'correcto';
		$subido=true;
		$subido='El producto se ha subido correctamente';
	}
		
    };
   
   
    // $subirProductos($titulo,$tamanio,$categoria,$precio,$ejemplares,$descripcion,$imagen['name']);
    // //header('Location:nuevo.php');
    
}
require_once 'views/subirProducto.view.php'; ?>