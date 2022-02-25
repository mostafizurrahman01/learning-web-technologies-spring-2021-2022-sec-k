<?php 
	// include_once('header.php');
	require_once('header.php');
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="../views/userlist.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/edit.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="Abc"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="123"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="aa@gmail.com"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
	</fieldset>	
	</form>
</body>
</html>