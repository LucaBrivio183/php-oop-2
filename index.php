<?php
require_once __DIR__ . '/db.php';

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
        <div class="row g-3">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName() ?> </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->getCategory()->getIcon() ?> <?php echo $product->getCategory()->getName() ?></h6>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice() ?> €</p>
                            <?php if (method_exists($product, 'getWeight')) : ?>
                                <p class="card-text">Peso netto: <?php echo $product->getWeight() ?>g</p>
                            <?php endif; ?>
                            <?php if (method_exists($product, 'getIngredients')) : ?>
                                <p class="card-text">Ingredienti: <?php echo $product->getIngredients() ?></p>
                            <?php endif; ?>
                            <?php if (method_exists($product, 'getDimensions')) : ?>
                                <p class="card-text"> Dimensioni: <?php echo $product->getDimensions() ?> cm </p>
                            <?php endif; ?>
                            <?php if (method_exists($product, 'getCharacteristics')) : ?>
                                <p class="card-text"> Caratteristiche: <?php echo $product->getCharacteristics() ?> cm </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>