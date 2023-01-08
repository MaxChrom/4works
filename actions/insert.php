<?php

require_once '../classes/Product-list.php';


$productList = new ProductList();

$name = $_POST['name'];
$description = $_POST['description'];
$price = (float) $_POST['price'];
$user_id = $_COOKIE['id'];

$product = new Product(null, $name, $description, $price, $user_id);
$productList->createProduct($product);

session_start();
$_SESSION['success'] = 'Product was created successfully';

header('Location: ../index.php');
