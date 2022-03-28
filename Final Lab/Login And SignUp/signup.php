<?php 
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        // if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        if(!empty($name) && !empty($user_name) && !empty($password) && !empty($email) && !empty($gender))
        {

            $user_id = random_num(10);
            $query = "insert into users (user_id, name, user_name, password, email,gender) values('$user_id', '$name, '$user_name', '$password','$email','$gender')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }
        else {
            echo "Enter Valid Information";
        }
    }
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SignUp</title>
</head>

<body>

    <style>
    #text {
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button {
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box {
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;

    }
    </style>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 10px; color:white;">SignUp</div>
            <input id="text" type="text" name="name"/><br/><br/>
            <input id="text" type="text" name="user_name"/><br/><br/>
            <input id="text" type="password" name="password"/><br/><br/>
            <input id="text" type="email" name="email"/><br/><br/>
            <input id="text" type="gender" name="gender"/><br/><br/>
            <input id="button" type="submit" name="Login"/><br/><br/>
            <a href="login.php">Sign Up</a><br/><br/>
        </form>
    </div>
</body>

</html>