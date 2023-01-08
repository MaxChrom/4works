<?php

$db = new Database();
$conn = $db->connection();
$err = [];
session_start();

if (isset($_POST['submit'])) {

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$err = 'Invalid email (example: "xxx@xxx.x")';
	}

	$stmt = $conn->prepare("SELECT user_id, user_password FROM users WHERE user_email=:email");
	$escapeEmail = $_POST['email'];
	$stmt->bindParam(':email', $escapeEmail, PDO::PARAM_STR);
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($data) {
		$err = "User with this e-mail is already exist";
		$_SESSION['error'] = $err;
	} else {
		if (count($err) == 0) {
			$email = $_POST['email'];
			$pas = $_POST['password'];

			if (strlen(trim(($pas))) < 5) {
				$err = "Password should contain at least 5 char.";
				$_SESSION['error'] = $err;
			} else {

				$password = md5(md5(trim($_POST['password'])));
				$passwordR = md5(md5(trim($_POST['passwordR'])));

				if ($password !== $passwordR) {
					$err = "Passwords do not match";
					$_SESSION['error'] = $err;
				} else {

					$stmt = $conn->prepare("INSERT INTO users (user_id, user_email, user_password, user_hash) VALUES (?, ?, ?, ?)");
					$stmt->bindValue(1, null);
					$stmt->bindValue(2, $email);
					$stmt->bindValue(3, $password);
					$stmt->bindValue(4,'');
					$stmt->execute();

					session_start();
					$_SESSION['success_message'] = "$email was successfully registered";
					header("Location: index.php");
					}
				}
			} else {
			foreach ($err as $error) {
				print $error."<br>";
				
			}
		}
	}
}








?>