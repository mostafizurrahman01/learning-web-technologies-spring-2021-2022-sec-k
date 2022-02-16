<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>	
	<title>Home Page</title>
</head>
<body>
    <style>

        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {

            background-color: #ddd;
            color: black;
        }

        .topnav a.active {

            background-color: #04AA6D;
            color: white;
        }
    
    </style>

    <div class="topnav">

        <a class="active" href="homePage.php">Home</a>
        <a href="login.php">Login</a>
        <a href="Registration.php">Registration</a>

    </div>

	<h1>Welcome home!</h1> <a href="logout.php"> logout </a>
</body>
</html>



<?php
	}else{
		echo "invalid request";
	}
?>