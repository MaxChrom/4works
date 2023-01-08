<?php
require_once '../classes/Product-list.php';
$id = $_GET['id'];

$productList = new ProductList();
$product = $productList->getProductById($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $product['name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php
        include '../components/navbar.php';
        echo getNavbar();
        ?>
    </div>

    <script src="../js/showSearch.js"></script>

    <div class="wrapper">
        <div class="card shadow-lg mx-3 mt-4">
            <div class="card-body">
                <h5 class="card-title border-bottom pb-3"><?php echo $product['name']; ?></h5>
                <p class="card-text">Price: <?php echo $product['price']; ?> $ </p>
                <p class="card-text"><?php echo $product['description']; ?></p>
            </div>
        </div>
        <div class="container mx-auto">
            <a href="./edit.php?id=<?= $product['id'] ?>" class="btn btn-primary mt-2">Edit</a>
            <script>
                let product = '<?php echo $product['id']; ?>';
            </script>
            <button class="btn btn-danger mt-2" onclick="if (confirm('Are you sure?')) { window.location = `./delete.php?id=${product}`; }">Delete</button>

            <a href="../index.php" class="btn btn-secondary mt-2" id="logout-button" type="submit">Back</a>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>