<?php

require_once 'db.php';

$name = $_POST['name'];
$description = md5($_POST['description']);
$price = $_POST['price'];
$category = $_POST['category_id'];

$stmt = $pdo->query('SELECT * FROM `item`');
$product = $stmt->fetchAll();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Product</title>
</head>
<body>
<header>
    <h1>Товары</h1>
</header>
<table>
    <tr>
        <th>Наименование</th>
        <th>Описание</th>
        <th>Цена</th>
        <th>Категория</th>
    </tr>
    <?php
    foreach ($product as $x) {
        echo '<tr>';
            echo '<td>'.$x['name'].'</td>';
            echo '<td>'.$x['description'].'</td>';
            echo '<td>'.$x['price'].'</td>';
            echo '<td>'.$x['category_id'].'</td>';
        echo '</tr>';
    }?>
</table>
</body>
</html>
