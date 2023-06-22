<?php

require_once __DIR__ . '/database.php';

// user
$user1 = new User(
    "Robert De Niro",
    "TaxiDriver1976@gmail.com",
    "123456789",
    "https://picsum.photos/id/100/100/100"
);

// user card for payment 
$card1 = new CardForPayment(
    "Robert De Niro",
    "1234 5678 9012 3456",
    "12/24",
    "123"
);

// Create a shopping cart
$cart = new ShoppingCart($user1);

// Add products to the cart
$cart->addItem($product1);
$cart->addItem($product2);
$cart->addItem($product3);

// Get the items in the cart
$items = $cart->getItems();

// Get the total price of the cart
$total = $cart->getTotal();

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

    <!-- header for animal shop  -->
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

        <!-- category section  -->
        <section class="category">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Categories</h2>
                    </div>
                    <div>
                        <?php foreach ($categories as $category) { ?>
                            <div class="col-12 text-center d-flex gap-3">
                                <select name="category" id="category">
                                    <option value=""><?= $category->getName(); ?></option>
                                </select>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- products section  -->
        <section class="products">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- products list  -->
        <div class="container py-4">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h3><?= $product->getName(); ?></h3>
                                <div><?= $product->icon; ?></div>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>Price <?= $product->getPrice(); ?> €</h4>
                                    <h5>Category: <?= $product->category->getName(); ?></h5>
                                    <div class="mb-3"><?= $product->category->icon; ?></div>
                                </div>
                                <!-- img  from product  -->
                                <div class="mb-3 img-card">
                                    <img src="<?= $product->getImg(); ?>" alt="<?= $product->getName(); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


        <!-- shopping cart section  -->
        <section class="shopping-cart">
            <div class="container py-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 text-center">
                        <h2>Shopping Cart</h2>

                        <!-- user info  -->
                        <div class="user-info">
                            <div class="user-avatar mb-2">
                                <img src="<?= $user1->getAvatar(); ?>" alt="<?= $user1->getName(); ?>">
                            </div>
                            <div class="user-name mb-2">
                                <h3>Ready to order? <?= $user1->getName(); ?> 🫡</h3>
                            </div>
                        </div>

                        <!-- cart items  -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($items as $item) { ?>
                                    <tr>
                                        <td><?= $item->getName(); ?></td>
                                        <td><?= $item->getPrice(); ?> €</td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td>Total</td>
                                    <td><?= $total; ?> €</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="purchase">
                            <!-- button purchase  -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Purchase</button>
                            <!-- button delete -->
                            <button type="button" class="btn btn-danger" onclick="deleteCart()">Delete Shopping Cart</button>

                            <!-- modal for purchase  -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Purchase</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="completion-message" style="display: none;">Order completed!</p>
                                            <button type="button" class="btn btn-primary" onclick="completeOrder()">Complete Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
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
    <script src="./js/main.js"></script>
</body>

</html>