<?php

// import classes
require_once 'models/product.php';
require_once 'models/category.php';
require_once 'models/food.php';
require_once 'models/toy.php';
require_once 'models/bed.php';

// product
$product1 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
);

$product2 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>'

);

$product3 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',

);

$product4 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',

);

$product5 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',

);

$product6 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',

);

$product7 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',

);

$product8 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',

);

$product9 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',

);

$product10 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
);

$product11 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',
);

$product12 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',

);

$product13 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',

);

$product14 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',

);

$product15 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',

);

$product16 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',

);

// array of products
$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
    $product7,
    $product8,
    $product9,
    $product10,
    $product11,
    $product12,
    $product13,
    $product14,
    $product15,
    $product16,
];

// category
$category1 = new Category("For Dogs", '<i class="fas fa-dog"></i>');
$category2 = new Category("For Cats", '<i class="fas fa-cat"></i>');

// category for products
$product1->category = $category1;
$product2->category = $category2;
$product3->category = $category1;
$product4->category = $category1;
$product5->category = $category2;
$product6->category = $category1;
$product7->category = $category1;
$product8->category = $category2;
$product9->category = $category1;
$product10->category = $category1;
$product11->category = $category2;
$product12->category = $category1;
$product13->category = $category1;
$product14->category = $category2;
$product15->category = $category1;
$product16->category = $category1;

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-2</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <!-- heder for animal shop  -->
    <header>
        <div class="container py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Animal Shop</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- main for animal shop  -->
    <main>
        <div class="container py-4">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h3><?= $product->getName(); ?></h3>
                                <div><?php echo $product->icon; ?></div>
                            </div>
                            <div class="card-body">
                                <h4>Price <?= $product->getPrice(); ?> €</h4>
                                <h5>Category: <?= $product->category->getName(); ?></h5>
                                <div class="mb-3"><?= $product->category->icon; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- footer for animal shop  -->
    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h3><span><i class="fas fa-dog"></i></span> Animal Shop <span><i class="fas fa-cat"></i></span></h3>
                </div>
            </div>
        </div>
    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>