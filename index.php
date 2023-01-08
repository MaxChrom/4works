<?php

require_once './classes/Product-list.php';

$productList = new ProductList();
$products = $productList->getAllProducts($_COOKIE['id']);

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4works</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="wrapper">
        <?php
        include './components/navbar.php';
        echo getNavbar();
        ?>
    </div>

    <div id="search-results"></div>

    <div class="wrapper">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success" style="text-align: center;">
                <?php echo $_SESSION['success']; ?>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <script src="./js/message.js"></script>
    </div>

    <div class="d-flex justify-content-center">
        <a href=" ./actions/create.php" type="button" class="btn btn-default btn-circle btn-xl d-flex align-items-center justify-content-center mt-3"><i class="bi bi-plus"></i></a>
    </div>

    <script src="./js/search.js"></script>

    <div class="row text-center">
        <?php foreach ($products as $key => $product) : ?>
            <div class="col-sm-6 mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= $product['name'] ?></h5><br>
                            <a href="./actions/details.php?id=<?= $product['id'] ?>" class=" btn btn-primary">Details</a>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>