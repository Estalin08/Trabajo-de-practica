<form action="#" method = "post" >
    <input type="text" name="titulo" placeholder="Agrega el titulo" required>
    <br>
    <input type="text" name="descripcion" placeholder="Descripcion" required style=" height: 60px">
    <br>
    <input type="submit" value="enviar">
</form>     


<?php

        $cookies_tiempo = time() +(86400 *1);

        $posts = [];

        if (isset($_COOKIE['posts'])){
            $posts = json_decode($_COOKIE ['posts'], true);

        }

        if ( $_SERVER["REQUEST_METHOD"] == "POST") {
        /*$titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"]; */

            if (isset($_POST ['titulo']) && isset ($_POST ['descripcion']) ){
                $titulo = htmlspecialchars ($_POST['titulo']);
                $descripcion= htmlspecialchars ($_POST['descripcion']);
            
            
                $posts[] = [
                    'titulo' => $titulo,
                    'descripcion' => $descripcion
                ];

                setcookie('posts', json_decode($posts), $cookies_tiempo, "/");
            }

        }


    ?> 
<?php
    if (!empty($posts)): ?>

    <h2>Post Enviado</h2>
    <?php foreach ($posts as $post):?>
        <p> <strong> titulo: </strong> <?php ['titulo']; ?> </P>
        <p> <strong> descripcion: </strong> <?php ['descripcion']; ?> </P>
        <hr>
        <?php endforeach; ?>
    <?php endif;?>    











