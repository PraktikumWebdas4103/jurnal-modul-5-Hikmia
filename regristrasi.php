<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form action="prosesregris.php" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td> : <input type="number" name="NIM" maxlength="10" minlength="10"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="Nama" maxlength="25" minlength="25"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <input type="email" name="Email"></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="input" value="input">
			</td>
		</tr>
	</table>
</form>
</body>
</html>