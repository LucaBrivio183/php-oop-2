<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';

//category
$category_dog = new Category('cane', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('gatto', '<i class="fa-solid fa-cat"></i>');
$category_fish = new Category('pesce', '<i class="fa-solid fa-fish"></i>');
$category_bird = new Category('uccello', '<i class="fa-solid fa-bird"></i>');

//product
$Royal_Canin_Mini_Adult = new Product('fakeimg.jpg', 'Royal Canin Mini Adult', 43.99, $category_dog);

var_dump($Royal_Canin_Mini_Adult);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Boolshop</title>
</head>

<body>
    <h1 class="text-center p-3">Boolshop</h1>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $Royal_Canin_Mini_Adult->getName() ?> </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php  ?></h6>
                    <p class="card-text">Prezzo: <?php echo $Royal_Canin_Mini_Adult->getPrice() ?> €</p>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>