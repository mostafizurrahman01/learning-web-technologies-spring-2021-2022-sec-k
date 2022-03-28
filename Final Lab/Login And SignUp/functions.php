<?php

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id= $_SESSION['user_id'];
        $query= "select * from users where user_id = '$id' limit 1 ";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header("Location: login.php");
    die;
}

// function check_registration($con)
// {
//     if(isset($_REQUEST['submit']))
//     {
//         $name = $_REQUEST['name'];
// 		$email = $_REQUEST['email'];
// 		$username = $_REQUEST['username'];
// 		$password = $_REQUEST['password'];
//         $confirmPassword = $_REQUEST['confirmPassword'];
// 		$gender = $_REQUEST['gender'];
// 		$date = $_REQUEST['date'];
		
// 		if($name != null && $email != null && $username != null && $password != null && $confirmPassword != null 
// 		&& $gender != null && $date != null){

//     }
        
// }

function random_num($length)
{
    $text = "";
    if($length < 5 )
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len ; $i++) { 

        $text .= rand(0,9);
    }

    return $text;
}