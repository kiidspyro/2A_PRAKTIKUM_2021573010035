<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login</title>	
</head>
<body>
	<h1>Masukkan data anda untuk mendaftar !</h1>
	<form action="proses_register.php" method="post">		
		<table>
			<tr>
				<td>nim</td>
				<td><input type="text" name="NIM"></td>
			</tr> 
            <tr>
				<td>nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
      <tr>
				<td>kelas</td>
				<td><input type="text" name="Kelas"></td>
			</tr> 
            <tr>
				<td>alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
            <tr>
				<td>ipk</td>
				<td><input type="text" name="IPK"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="PASS"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="daftar" style="color: green;"></td>
                <td><input type="reset" nama="reset" value="Reset" style="color: red;"></td>
			</tr>
		</table>
	</form>
</body>
</html>