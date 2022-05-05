<?php
require_once 'admin/config.php';
require_once 'funciones.php';
if(!$conexion()){
    // die('Error de conexión');
    header('Location:../errorConexion.php');
};
    $email=$_POST["email"];
    $token=$_POST["token"];
    $codigo=$_POST["codigo"];
    echo "correo:$email . token:$token . codigo:$codigo <br>";
    var_dump($_POST);echo "<br>";
    $correcto=false;
        
    $stmt=$conexionContrasena()->prepare("SELECT * FROM passwords WHERE email=:email AND token=:token AND codigo=:codigo LIMIT 1");
    $stmt->execute([
        ':email'=>$email,
        ':token'=>$token,
        ':codigo'=>$codigo,
    
    ]);
           
    
    
    $resultado=$stmt->fetch();
    var_dump($resultado);
    if(!$resultado){
        $mensaje='El código es erroneo';
        $correcto=false;
            
    }else{
            
        if(isset($_POST['submit'])=='cambiar'){
            $pass=$_POST['pass'];
            $pass2=$_POST['pass2'];
            if($pass == $pass2){
            $pass=hash('sha512',$pass);
            $stmt=$conexionContrasena()->prepare("UPDATE usuarios SET password=:pass WHERE email=:emai");
            $stmt->execute([
                ':pass'=>$pass,
                ':email'=>$email
            ]);
        }
    }
    $correcto=true;
}
    
require_once 'views/validarToken.view.php'; ?>