<?php 
	// include('header.php'); //if it is call twice then it will print two time.
	//include_once('header.php'); //if it is call twice then it will print once time.

	// require('header.php');
	require_once('header.php');

	//include and require diff- error throwing.

?>

<html>
<head>	
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome <?=$_SESSION['current_user'][0] ?></h1>

	<a href="create.php"> Create New User </a> |
	<a href="userlist.php"> User List </a> |
	<a href="../controllers/logout.php"> logout </a>

</body>
</html>
