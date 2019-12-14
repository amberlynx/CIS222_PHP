<!-- Script 15.8 -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
		<script src="jquery-3.2.1.min.js"></script>
		<script src="login.js"></script>
	</head>
	<body>
		<h1>Login</h1>
		<p id="results"></p>
		<form action="login.php" method="post" id="login">
			<p id="emailP">Email: <input type="email" name="email" id="email"><span class="errorMessage" id="emailError">Please enter your email!</span></p>
			<p id="passwordP">Password: <input type="password" name="password" id="password"><span class="errorMessage" id="passwordError">Please enter your password!</span></p>
			<p><input type="submit" name="submit" value="Login!"></p>
		</form>
	</body>
</html>
