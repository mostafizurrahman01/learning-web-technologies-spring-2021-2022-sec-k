<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
        $type = $_REQUEST['type'];

		if($username != null && $password != null && $email != null && $type != null){

			$user = $username."|".$password."|".$email. "|".$type."\r\n";
            if($type =='Admin'){
                $file = fopen('../models/manageRoles.txt', 'a');
                fwrite($file, $user);
                fclose($file);
                header('location: ../views/home.php');
            }
            else {
                $file = fopen('../models/user.txt', 'a');
                fwrite($file, $user);
                fclose($file);
                header('location: ../views/home.php');
            }
		
		}
		else{
			echo "null submission";
		}
	}
?>
