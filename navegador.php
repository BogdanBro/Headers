<?php

//Crea aquí tu script para seleccionar el idioma

$naveg =$_SERVER['HTTP_USER_AGENT'];
$naveg=substr($naveg,0,-strlen($naveg)+7);

//Fin script

if ($naveg == "Mozilla"){

    $content = "Esta maravillosa pagina esta en un navegador Mozilla , felicidades";

    $title = "Mozillador";

}else {
    $content = "!AVISO¡ Tu pagina no se esta abriendo en Mozilla";
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