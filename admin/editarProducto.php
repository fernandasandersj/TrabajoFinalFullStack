<?php session_start();
require_once 'config.php';
require_once '../funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
if(!isset($_SESSION['usuario'])){
	header('Location:index.php');
}
$errores='';
$subido=false;
if(isset($_POST['submit'])){
    $id=filter_var($_POST['id'],FILTER_SANITIZE_STRING);
    $titulo=filter_var($_POST['titulo'],FILTER_SANITIZE_STRING);
    $tamanio=filter_var($_POST['tamanio'],FILTER_SANITIZE_STRING);
    $categoria=filter_var($_POST['categoria'],FILTER_SANITIZE_STRING);
    $precio=filter_var($_POST['precio'],FILTER_SANITIZE_STRING);
    $ejemplares=filter_var($_POST['ejemplares'],FILTER_SANITIZE_STRING);
    $descripcion=filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    $imagenGuardada=filter_var($_POST['imagenGuardada'],FILTER_SANITIZE_STRING);
    
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
    // $imagen=$_FILES['imagen'];
    if(!empty($imagen['tmp_name'])){
        $comprobar=getimagesize($_FILES['imagen']['tmp_name']);
        if($comprobar!=false){
            $rutaArchivo=$admin_config['carpetaImg'].$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],$rutaArchivo);
            $imagen=$_FILES['imagen']['name'];
        }else{
            $imagen=$imagenGuardada;
        }
    }else{
        $imagen=$imagenGuardada;
    }
    $stmt=$conexion()->prepare("UPDATE productos SET titulo=:titulo, tamanio=:tamanio, categoria=:categoria, precio=:precio, ejemplares=:ejemplares, descripcion=:descripcion, imagen=:imagen WHERE id=:id");
    
	$stmt->execute([
		':id'=>$id,
		':titulo'=>$titulo,
		':tamanio'=>$tamanio,
		':categoria'=>$categoria,
		':precio'=>$precio,
		':ejemplares'=>$ejemplares,
		':descripcion'=>$descripcion,
		':imagen'=>$imagen,
	]);
    $subido=true;
	$subido='El producto se ha editado correctamente';
    // header('Location:gestionarProductos.php');
}else{
    $id=$recogerId($_GET['id']);
	if(!$id){
		header('Location:index.php');
	}
	$producto=$obtenerProductosPorId($id);
    if(!$producto){
            header('Location:index.php');
        }
    
    };
require_once 'views/editarProducto.view.php';
?>