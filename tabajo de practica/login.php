<?php

session_start();
require_once './db_usuarios.php';
if(
    isset ($_POST['user']) && !empty($_POST['user'])
    && isset ($_POST['password']) && !empty($_POST['password'])
) {
    $iteracion = 0;
    $usuario_nombre = $_POST['user'];
    $contraseña = $_POST ['password'];
    foreach ($usuarios as $user ) {
        if ($user ['user'] == $usuario_nombre and $user ['password'] == $contraseña) {
            $iteracion=1;
            break;
        }
    }

    if($iteracion == 1){
        $_SESSION['user']= $user;
        setcookie('user', $user['user'], time() + 86400 * 1);

        header('location: welcome.php');
    } else{
        echo "usuarios o contraseña incorrectos";
    }

}