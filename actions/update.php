<?php

include '../classes/Product-list.php';

$productList = new ProductList();

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];


$productList->updateProduct($_POST['name'], $_POST['price'], $_POST['description'], $_POST['id']);

session_start();
$_SESSION['success'] = 'Product updated successfully';

header('Location: ../index.php');
?>
