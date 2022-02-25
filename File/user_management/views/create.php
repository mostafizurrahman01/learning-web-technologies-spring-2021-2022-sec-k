<?php 

	// include('header.php'); //if it is call twice then it will print two time.
	// include_once('header.php'); //if it is call twice then it will print once time.

	require_once('header.php');
?>

<html>
<head>
	<title>Create User</title>
</head>
<body>

	<a href="../views/home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/regCheck.php">
		<fieldset>
			<legend>Add New User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
	</fieldset>	
	</form>
</body>
</html>