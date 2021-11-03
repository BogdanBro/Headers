<?php

//Crea aquí tu script para seleccionar el idioma

$title="Pagina";

$dejameEntrar=1;

$dejameEntrar == 1 ? $content = "Bienvenido !" : header('Location: ./login.php');




//Fin script

?>
<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Víctor Ponz">

</head>    

<body>

    <?= $content ?>

</body>

</html>