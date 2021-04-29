<!DOCTYPE html>
<html>
<head>
	<title>MK Pemrograman dan Web App I</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action="login.php" method="post">
		<h2>Login</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="user name"><br>

		<label>password</label>
		<input type="password" name="password" placeholder="uppercase, lowercase, number and special character is a must"><br>

		<button type="submit">Login</button>
	</form>
</body>
</html>