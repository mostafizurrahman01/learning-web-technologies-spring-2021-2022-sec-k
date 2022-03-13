<?php 
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
			<td>Type</td>
			<td>Current Status</td>
			<td>Change Status</td>		
		</tr>

		<?php 
				$file = fopen('../models/user.txt', 'r');
				$type = 'User';
				
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$userArray = explode("|", $user);
			?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[4]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$type?></td>
				<td><?=$userArray[8]?></td>
				<td><a href="banUsers.php?id=<?=$userArray[0]?>"> Ban User </a></td>
			</tr>

			<?php
				}
			?>

	</table>

</body>

</html>