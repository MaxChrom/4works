<?php
	
require './generateCode.php';

$db = new Database();
$conn = $db->connection();

if (isset($_POST['submit'])) {
	// prepare the statemen

	$stmt = $conn->prepare("SELECT user_id, user_password FROM users WHERE user_email=:email LIMIT 1");

	$escapeEmail = $_POST['email']; 
	// bind the email parameter
	$stmt->bindParam(':email', $escapeEmail, PDO::PARAM_STR);

	// execute the statement and fetch the data
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($data['user_password'] === md5(md5(($_POST['password'])))) {
	
			$hash = md5(generateCode(10));

			//хэш авторизации
			$data_id = $data['user_id']; // для строки ниже

			// prepare the update statement
			$stmt = $conn->prepare("UPDATE users SET user_hash=:hash WHERE user_id=:user_id");

			// bind the parameters
			$stmt->bindParam(':hash', $hash, PDO::PARAM_STR);
			$stmt->bindParam(':user_id', $data_id, PDO::PARAM_INT);

			// execute the statement
			$stmt->execute();

			//куки
			setcookie("id", $data['user_id'], time() + 60 * 60 * 24 * 30, "/");
			setcookie("hash", $hash, time() + 60 * 60 * 24 * 30, "/", null, null, true);

			// Переадресация на проверку
			header("Location: ../index.php");
			exit();
		
	} else {
		$err[] = "Wrong email or password";
		print $error;
	}
}


?>