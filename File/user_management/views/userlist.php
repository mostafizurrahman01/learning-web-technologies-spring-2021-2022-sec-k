<?php 
	// include_once('header.php');
	require_once('header.php');
?>

<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="../views/home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>	
			<td>EMAIL</td>
			<td>Password</td>
			<td>Action</td>			
		</tr>

		<tr>
			<td>1</td>
			<td><?=$_SESSION['current_user'][0]?></td>	
			<td><?=$_SESSION['current_user'][2]?></td>
			<td><?=$_SESSION['current_user'][1]?></td>
			<td>
				<a href="edit.php">Edit</a> |
				<a href="delete.php">Delete</a>
			</td>
		</tr>

		<!-- <tr>
			<td>2</td>
			<td>amin</td>	
			<td>amin@gmail.com</td>
			<td>1234</td>
			<td>
				<a href="edit.php">Edit</a> |
				<a href="delete.php">Delete</a>
			</td>
			
		</tr> -->

	</table>

</body>

</html>