<?php 

    function login($username, $password)
    {
        $con = mysqli_connect('localhost','root','','webtech');
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)){
            return true;
        }
        else {
            return false;
        }
    }


?>