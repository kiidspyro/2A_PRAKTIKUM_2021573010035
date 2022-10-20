<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Silakan Login Bro!</h1>
	<h3>Masukkan username dan password. . .</h3>
	<form action="login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><a href="register.php">Belum punya akun? daftar disini!</a></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Log In" style="color: green;"></td>
			</tr>
</body>
</html>