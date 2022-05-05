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
    $descripcion=filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    $imagenGuardada=filter_var($_POST['imagenGuardada'],FILTER_SANITIZE_STRING);
    
    
    if(empty($descripcion)){
		$errores.='Debes insertar la descripción';
	}
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
    $stmt=$conexion()->prepare("UPDATE portada SET imagen=:imagen, descripcion=:descripcion  WHERE id=:id");
    
	$stmt->execute([
		':id'=>$id,
		':imagen'=>$imagen,
		':descripcion'=>$descripcion
	]);
    // $subido=true;
	// $subido='La portada se ha editado correctamente';
    header('Location:gestionarGenerico.php');
}else{
    $id=$recogerId($_GET['id']);
	if(!$id){
		header('Location:index.php');
	}
    $stmt=$conexion()->prepare("SELECT * FROM portada WHERE id=:id LIMIT 1");
		$stmt->execute([
			':id'=>$id
		]);
	$portada=$stmt->fetch();
    if(!$portada){
            header('Location:index.php');
        }
    
    };
	
require_once 'views/editarGenerico.view.php';
?>