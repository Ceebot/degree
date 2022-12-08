<?php
require_once "../connect.php";

$typeName = filter_var(trim($_POST['typeName']));
$name = filter_var(trim($_POST['name']));
$volume = filter_var(trim($_POST['volume']));
$price = filter_var(trim($_POST['price']));
$description = filter_var(trim($_POST['description']));
$img = filter_var(trim($_POST['img']));

if ($typeName === 'products')
    $result = $mysql->query("INSERT INTO product (title, volume, price) VALUES ('$name', '$volume', '$price')");

if ($typeName === 'services')
    $result = $mysql->query("INSERT INTO service (title, description, price, img) VALUES ('$name', '$description', '$price', '$img')");

if (count($result) == 0) {
    echo 'false';
    exit;
}

else echo 'success';



