<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
<center>
	<form action="http://localhost/codeigniter/index.php/user/add" method="POST">
	<table>
		<tr><td>Username</td> <td>:</td><td><input name="username" value=""></td></tr>
		<tr><td>Password</td><td>:</td> <td><input name="password" type="password" value=""></td></tr>
		<tr><td>Fullname</td> <td>:</td><td><input name="fullname" value=""></td></tr>
		<tr><td>Level</td> <td>:</td><td><select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select></td></tr>
		<tr><td><input name="tombol" type="submit" value="simpan"></td></tr>
	</table>
	</form>
</center>
</body>
</html>