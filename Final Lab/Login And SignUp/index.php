<?php

session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login and Signup Page Using PHP</title>
</head>

<body>

    <a href="logout.php"> Logout</a>

    </br>

    <h1>This is the Home page</h1>

    Hello, <?php echo $user_data['user_name']; ?>

</body>

</html>