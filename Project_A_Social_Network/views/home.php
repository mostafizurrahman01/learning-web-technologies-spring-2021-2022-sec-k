<?php 
	session_start();
?>

<html>
<head>	
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome</h1>

	<?php
		$id = ''; 
		if (isset($_GET['id'])) {
            $id = $_GET['id'];
		}

		if($id == '1') {

			echo '<a href="../controllers/logout.php"> logout </a>';
		}
		else {

			echo "<table border='1' width='100%'>";
				echo "<tr width='600px'>";
					echo "<td width='100px'>";
						echo "<b>Admin User</b><br/>";
						echo "<ul>";
							echo "<li><a href='viewProfile.php'>View Profile</a></li>";
							echo "<li><a href='../views/editAdminProfile.php?id=".$_SESSION['current_user'][0]."'>Edit Profile</a></li>";
							echo "<li><a href='../views/changePP.php'>Change Profile Picture</a></li>";
							echo "<li><a href='changePassword.php'>Change Password</a></li>";
							echo "<li><a href='addAdmin.php'> Add Admin </a></li>";
							echo "<li><a href='userlist.php'> User List </a> </li>";
							echo "<li><a href='adminList.php'> Admin List </a></li>";
							echo "<li><a href='manageRoles.php'> Roles Management </a></li>";
							echo "<li><a href='reportReview.php'> Report Review </a></li>";
							echo "<li><a href='../controllers/logout.php'> logout </a></li>";
						echo "</ul>";
				echo "</td>";
			echo "</tr>";

			echo "</table>";
		}
	
	?>

</body>
</html>