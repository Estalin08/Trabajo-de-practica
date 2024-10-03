<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sesion bloqueada</h1>
    <form action="#" method ="post" >
        <input type="password" name="password" placeholder="Contraseña" required>
        <br>
        <input type="submit" value="iniciar sesión">
    </form> 
</body>
</html>


<?php

session_start();
require_once './db_usuarios.php';
if(
    isset ($_POST['password']) && !empty($_POST['password'])
) {
    $iteracion = 0;
    $contraseña = $_POST ['password'];
    foreach ($usuarios as $user ) {
        if ( $user ['password'] == $contraseña) {
            $iteracion=1;
            break;
        }
    }

    if($iteracion == 1){
        $_SESSION['user']= $user;

        header('location: welcome.php');
    } else{
        echo "contraseña incorrecta";
    }

}