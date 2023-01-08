<?php
require "../classes/Database.php";
require "register.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Sign up</title>
</head>

<body>

	<div class="wrapper">
		<?php if (isset($_SESSION['error'])) : ?>
			<div class="alert alert-warning" style="text-align: center;">
				<?php echo $_SESSION['error']; ?>
			</div>
			<?php unset($_SESSION['error']); ?>
		<?php endif; ?>

		<script src="../js/message.js"></script>
		
		<div class="container">
			<div class="user-flex d-flex align-items-center justify-content-center">
				<form class="user-form form position-relative w-50 " style='text-align:center' method="post">
					<div class="mb-3 mt-3 ">
						<label for="exampleInputEmail1" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
						<!-- <div id="emailHelp" class="form-text">Мы не передаем данные третьим лицам.</div> -->
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Confirm password</label>
						<input type="password" class="form-control" id="passwordR" name="passwordR">
					</div>
					<button type="submit" class="btn btn-primary mb-3" name="submit">Sign up</button><br>
					<a href="index.php">Already registred? Sign In</a>
				</form>
			</div>
		</div>
	</div>
	<script src="js/app.js"></script>
</body>

</html>