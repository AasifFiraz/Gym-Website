<?php

include '../config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);
	$usertype = ($_POST['usertype']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO register (username, email, password, usertype)
					VALUES ('$username', '$email', '$password', '$usertype')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Successfully Registered')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$usertype = "";
			} else {
				echo "<script>alert('Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Does Not Match.')</script>";
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

	<title>Register</title>
</head>

<body>
	<div class="container">
		<a href="../index.php">
			<button type="button" class="btn-close btn-close-white" aria-label="Close" style="position: relative; margin-left: 20rem; bottom: 15px;"></button>
		</a>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">
			<p class="login-txt">Register</p>
			<div class="login-text-group">
				<input type="text" class="email-pass-txt" autocomplete="off" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<select class="usertype" name="usertype" value="<?php echo $usertype; ?>" required>
				<option>Admin</option>
				<option>Instructor</option>
				<option>Gym Member</option>
			</select>
			</br></br>
			<div class="login-text-group">
				<input type="email" class="email-pass-txt" autocomplete="off" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="login-text-group">
				<input type="password" class="email-pass-txt" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="login-text-group">
				<input type="password" class="email-pass-txt" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="login-text-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
	<script type="text/javascript" src="..//js/bootstrap.bundle.js"></script>
</body>
</html>