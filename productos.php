<?php

//Crea aquí tu script para seleccionar el idioma

$title="Productos";
$id=2;

$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

//Fin script

if (array_key_exists($id, $productos)){

    $content = $productos[$id];

   

}else {
   $content = "Este poroducto no existe!!!";
   (http_response_code(404));
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