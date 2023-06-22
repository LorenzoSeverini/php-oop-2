<?php

// import classes
require_once 'models/product.php';
require_once 'models/category.php';
require_once 'models/food.php';
require_once 'models/toy.php';
require_once 'models/bed.php';
require_once 'models/user.php';
require_once 'models/shoppingCart.php';
require_once 'models/payment.php';

// category
$category1 = new Category("For Dogs", '<i class="fas fa-dog"></i>');
$category2 = new Category("For Cats", '<i class="fas fa-cat"></i>');

// product
$product1 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
    // img picsum 
    "https://picsum.photos/id/100/200/200"
);

$product2 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',
    // img picsum 
    "https://picsum.photos/id/101/200/200"
);

$product3 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',
    // img picsum
    "https://picsum.photos/id/102/200/200"
);

$product4 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
    // img picsum
    "https://picsum.photos/id/103/200/200"
);

$product5 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',
    // img picsum
    "https://picsum.photos/id/104/200/200"
);

$product6 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',
    // img picsum
    "https://picsum.photos/id/130/200/200"
);

$product7 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
    // img picsum
    "https://picsum.photos/id/106/200/200"
);

$product8 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',
    // img picsum
    "https://picsum.photos/id/107/200/200"
);

$product9 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',
    // img picsum
    "https://picsum.photos/id/108/200/200"
);

$product10 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
    // img picsum
    "https://picsum.photos/id/109/200/200"
);

$product11 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',
    // img picsum
    "https://picsum.photos/id/110/200/200"
);

$product12 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',
    // img picsum
    "https://picsum.photos/id/111/200/200"
);

$product13 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
    // img picsum
    "https://picsum.photos/id/112/200/200"
);

$product14 = new Toy(
    "Ball",
    5,
    $category2,
    "Toy",
    '<i class="fas fa-futbol"></i>',
    // img picsum
    "https://picsum.photos/id/113/200/200"
);

$product15 = new Bed(
    "Bed",
    50,
    $category1,
    "Bed",
    '<i class="fas fa-bed"></i>',
    // img picsum
    "https://picsum.photos/id/114/200/200"
);

$product16 = new Food(
    "Croquettes",
    10,
    $category1,
    "Food",
    '<i class="fas fa-drumstick-bite"></i>',
    // img picsum
    "https://picsum.photos/id/115/200/200"
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


// category array 
$categories = [
    $category1,
    $category2,
];
