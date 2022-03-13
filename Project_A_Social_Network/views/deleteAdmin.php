<?php 
	
	require_once('header.php');
	$user = $_REQUEST['id'];
?>

<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<center>
		<a href='../controllers/deleteAdmin.php?id=<?=$user?>&delete=del'>Confirm Delete</a> | <a href="../views/adminList.php">Cancle</a>
	</center>
</body>
</html>