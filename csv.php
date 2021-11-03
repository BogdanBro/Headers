<?php

//Crea aquí tu script para seleccionar el idioma

$title="CSV";

$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

//Fin script

$fp = fopen('productos.csv', 'w');

    fputcsv($fp, $productos);


fclose($fp);


$file = fopen( './productos.csv', "r");
$data = array();

while (!feof($file)) {
       $data[] = fgetcsv($file,null,',');
}
fclose($file);

$content = var_dump($data) ;



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