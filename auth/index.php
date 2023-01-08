<?php

require "../classes/Database.php";
require "login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Sign In</title>
</head>

<body>
	<?php
	session_start();
	if (isset($_SESSION['success_message'])) {
		echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
		unset($_SESSION['success_message']);
	}
	?>


	<div class="wrapper">
		<div class="container">
			<div class="user-flex d-flex align-items-center justify-content-center" style='text-align:center'>
				<form class="user-form form position-relative w-50 mt-3" method="post">
					<div class="mb-3 mt-3">
						<label for="exampleInputEmail1" class="form-label">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
						<!-- <div id="emailHelp" class="form-text">Мы не передаем данные третьим лицам.</div> -->
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
					<!-- <div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
						<label class="form-check-label" for="exampleCheck1">Confirm all 😀</label>
					</div> -->
					<button type="submit" class="btn btn-primary mb-3" name="submit">Sign in</button><br>

					<a href="registration-page.php">Don't have an account yet? Sign Up</a>
				</form>
			</div>

		</div>
	</div>
	<script src="js/app.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
</body>

</html>