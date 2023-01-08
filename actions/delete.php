<?php

require_once '../classes/Product-list.php';

$productList = new ProductList();

$id = $_GET['id'];

$productList->deleteProduct($id);

session_start();
$_SESSION['success'] = 'Product was successfully deleted';

header('Location: ../index.php');
