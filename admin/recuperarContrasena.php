<?php 
require_once 'config.php';
require_once '../funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
$mensaje='';
$errores='';
$enviado=false;
if(isset($_POST['submit'])){
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    //Consulta para saber si existe el email
    if(!empty($email)){
        $stmt=$conexionContrasena()->prepare('SELECT email FROM usuarios WHERE email=:email');
    
        $stmt->execute([
            ':email'=>$email,
        ]);
        $resultado=$stmt->fetch();
        if($resultado){
        $bytes= random_bytes(5);
        $token=bin2hex($bytes);
    
        include "mailReset.php";
        
        $enviado=true;
        if($enviado){
        
            $stmt=$conexionContrasena()->prepare("INSERT INTO passwords(email, token, codigo) VALUES(:email,:token,:codigo) ");
                $stmt->execute([
                    ':email'=>$email,
                    ':token'=>$token,
                    ':codigo'=>$codigo,
                ]);
                $mensaje="Si el email está en nuestra base de datos, se le enviará un correo  para restablecer la contraseña";
        }
    
    }else{
            $errores.='Por favor inserta un correo correcto';
        }
} // Empty email
} //Submit
require_once 'views/recuperarContrasena.view.php'; ?>