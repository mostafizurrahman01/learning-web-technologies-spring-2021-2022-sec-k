<?php 

    session_start();
    
    if(isset($_REQUEST['submit']))
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username != null && $password != null)
        {
            $user= $_SESSION['user'];
            if($user['username'] == $username && $user['password'] == $password)
            {
                $_SESSION['status']=true;

                if(isset($_SESSION['remember'])){

                    setcookie('status', 'true', time()+3600, '/');
                    
                }
                else{
                    setcookie('status','true');
                }

                header('Location:dashboard.php');
            }
            else {
                echo 'Invalid user';
            }
        }
        else {
            
            echo 'Wrong submission';
        }
    }

    // setcookie(session_name(),session_id(),time()+ 3600);
?>