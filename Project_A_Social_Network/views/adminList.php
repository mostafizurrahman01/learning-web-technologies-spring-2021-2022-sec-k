<?php 
	require_once('header.php');
?>

<html>
<head>
	<title>Admin List</title>
</head>
<body>

	<a href="../views/home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	

    <table border="1">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
			<th>TYPE</th>
			<th>ACTION</th>
		</tr>
		<?php
		$file = fopen('../models/admin.txt', 'r');
		while (!feof($file)) {
            $count=1;
			$type ='Admin';
			$user = fgets($file);
			$userArry = explode('|', $user);
			if ($userArry[0] != null) {
				echo "<tr>";
				echo "<td>" . $userArry[0] . "</td>";
				echo "<td>" . $userArry[1] . "</td>";
				echo "<td>" . $userArry[3] . "</td>";
				echo "<td>" . $userArry[2] . "</td>";
				echo "<td>" . $type . "</td>";
				echo "<td>";
				echo "<a href='../views/deleteAdmin.php?id=" . $userArry[0] . "'> DELETE </a>";
				echo "</td>";
				echo "</tr>";
			}
            $count++;
		}
		?>
	</table>

</body>

</html>