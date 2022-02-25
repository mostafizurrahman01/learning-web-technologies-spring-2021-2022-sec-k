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
			<?= 
				$count=1;
				$file = fopen('../models/user.txt','r');

				while(!feof($file))
				{
					$user = fgets($file);
					$userArray = explode('|',$user);
					$_SESSION['current_user'] = $userArray;

					if($userArray!=[''])
					{
						echo "<tr>";

							echo "<td>"
									.$count.
								"</td>";

							echo "<td>" 
									.$userArray[0]. 
								"</td>";

							echo "<td>" 
									.$userArray[2]. 
								"</td>";

							echo "<td>" 
									.$userArray[1]. 
								"</td>";
							
							echo "<td>";
									echo "<a href='edit.php'> EDIT </a> | ";
									echo "<a href='delete.php'> DELETE </a> | ";
								"</td>";

						echo "<tr>";
					}
					$count++;
					
				}
			
			
			?>
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