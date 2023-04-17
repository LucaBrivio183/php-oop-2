<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';

$Royal_Canin_Mini_Adult = new Food('fakeimg.jpg', 'Royal Canin Mini Adult', 43.99, 545, ['prosciutto', 'riso']);
var_dump($Royal_Canin_Mini_Adult);
$title = 'Boolshop'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
</head>

<body>
    <h1>Boolshop</h1>
</body>

</html>