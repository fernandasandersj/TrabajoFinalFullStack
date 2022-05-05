<?php 

require_once 'funciones.php';
require_once 'admin/config.php';

if(!$conexion()){
    header('Location:errorConexion.php');
};

$errores='';

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST'){

	$usuario=filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$pass=$_POST['password'];
	$pass2=$_POST['password2'];

	if(empty($usuario) || empty($pass) || empty($pass2) ){
		$errores .= 'Debes introducir todos los campos';
	}else{
		$stmt=$conexion()->prepare('SELECT * FROM clientes WHERE usuario=:usuario LIMIT 1');

		$stmt->execute([
			':usuario'=>$usuario,
		]);

		$resultado=$stmt->fetch();

		if($resultado!=false){
			$errores .= 'Ya hay un usuario con ese nombre';
		}

		$pass=hash('sha512',$pass);
		$pass2=hash('sha512',$pass2);

		if($pass!==$pass2){
				$errores .= 'Las contraseñas no coinciden';
		};

		if(empty($errores)){
			$stmt=$conexion()->prepare('INSERT INTO clientes (id,usuario,pass) VALUES(null,:usuario,:pass)');
            
           
			$stmt->execute([
				':usuario'=>$usuario,
				':pass'=>$pass,
			]);

			header('Location:iniciarSesionCliente.php');
		}

	}

}


require_once 'views/registroCliente.view.php';?>