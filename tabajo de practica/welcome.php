
<form action="./bloquear_usuario.php" method="post">
    <input type="submit" value="Bloquear sesion">
</form>

<?php
session_start();

if (
    isset($_SESSION['user']) &&
    !empty($_SESSION['user'])
) {
    echo "BIENVENID@: {$_SESSION['user']['name']} <br>";


} else {                                                                                                                                                

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>

</body>
</html>

<?php include './Post.php'; ?>

