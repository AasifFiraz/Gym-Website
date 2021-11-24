<?php

include '../config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$usertype = $_POST['usertype'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM register WHERE email='$email' AND usertype = '$usertype' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ../index.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="..//css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="..//Styles/login_style.css">

	<title>Login Form</title>
</head>

<body>

	<div class="container">
		<a href="../index.php">
			<button type="button" class="btn-close btn-close-white" aria-label="Close" style="position: relative; margin-left: 20rem; bottom: 15px;"></button>
		</a>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">
			<p class="login-txt">Login</p>
			<div class="login-text-group">
				<input type="email" class="email-pass-txt" autocomplete="off" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>

			<select class="usertype" name="usertype" value="<?php echo $usertype; ?>" required>
				<option>Admin</option>
				<option>Instructor</option>
				<option>Gym Member</option>
			</select>
			</br></br>
			<div class="login-text-group">
				<input type="password" class="email-pass-txt" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="login-text-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register here</a>.</p>
		</form>
	</div>
	<script type="text/javascript" src="..//js/bootstrap.bundle.js"></script>
</body>

</html>