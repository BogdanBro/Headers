<?php

//Crea aquí tu script para seleccionar el idioma

$idioma =$_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language= substr($idioma,0,-strlen($idioma)+2);

//Fin script

if ($language == "en"){

    $content = "This page is in English";

    $title = "Change the language of the page";

}else{

    $content = "Esta página está en Castellano (Idioma por defecto)";

    $title = "Cambiar el idioma de la página";

}

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