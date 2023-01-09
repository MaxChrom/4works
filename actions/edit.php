<?php require_once '../classes/Product-list.php';

$id = $_GET['id'];


$productList = new ProductList();
$product = $productList->getProductById($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <div class="wrapper">
        <?php
        include '../components/navbar.php';
        echo getNavbar();
        ?>
    </div>

    <div class="container">
        <script src="../js/showSearch.js"></script>
        <form method="post" action="./update.php">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"></label>
                <input type="hidden" class="form-control" type="hidden" id="id " name="id" value="<?php echo $product['id']; ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Product name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Product price:</label>
                <input type="text" class="form-control" id="price" name="price" pattern="\d*" value="<?php echo $product['price']; ?>">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea">Product description:</label>
                <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 10rem;"><?php echo $product['description']; ?> </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../index.php" class="btn btn-secondary" id="logout-button" type="submit">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>