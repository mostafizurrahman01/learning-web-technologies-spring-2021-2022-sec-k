<?php 
	
	require_once('header.php');
	$user = $_REQUEST['id'];
	var_dump($user);
	
?>

<html>
<head>
	<title>Ban User</title>
</head>
<body>

	<center>
		<a href='../controllers/banUsers.php?id=<?=$user?>&update=upd'>Confirm</a> | <a href='../views/userlist.php'>Cancel</a>
	</center>
	
</body>
</html>