<?php 
	require_once('header.php');
?>

<html>
<head>
	<title>Report Check</title>
</head>
<body>

	<a href="../views/home.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>	
			<td>Report</td>		
		</tr>

		<?php

			$file = fopen("../models/reportReview.txt",'r');
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
				<td><?=$userArray[2]?></td>
			</tr>
			
		<?php
			}
		?>

	</table>
		
</body>
</html>