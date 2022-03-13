<?php 
	require_once('header.php');
?>

<html>
<head>
	<title>Roles Management</title>
</head>
<body>

	<a href="../views/home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/manageRoles.php">
		<fieldset>
			<legend>Roles Manage</legend>
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
					<td>Type</td>
					<td>
                        <select name="type" id="">
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
	</fieldset>	
	</form>
</body>
</html>