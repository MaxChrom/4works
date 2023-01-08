<?php
require_once "../classes/Database.php";

$db = new Database();
$conn = $db->connection();
session_start();

if (!isset($_SESSION['previousSearchQuery'])) {
  $_SESSION['previousSearchQuery'] = '';
}


$searchQuery = $_GET['q'];
$stmt = $conn->prepare('SELECT * FROM products WHERE name LIKE :name AND user_id = :user_id');
$user_id= $_COOKIE['id'];
$stmt->execute(['name' => $searchQuery . '%', 'user_id' => $user_id]);
$results = $stmt->fetchAll();


echo json_encode(['results' => $results, 'session' => $_SESSION]);

$_SESSION['previousSearchQuery'] = $searchQuery;

