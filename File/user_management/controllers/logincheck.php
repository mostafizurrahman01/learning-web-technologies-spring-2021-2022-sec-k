<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			//$user = $_SESSION['user'];

			$file = fopen('../models/user.txt','r');
			while(!feof($file))
			{		
				$user = fgets($file); //fgets return one line. 
				$userArray= explode('|',$user);

				if(trim($userArray[0]) == $username && trim($userArray[1]) == $password){
				$_SESSION['status'] = true;
				$_SESSION['current_user'] = $userArray;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/home.php');
				}
			}
			echo "invalid";
			
			/* if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');

				header('location: home.php');
			} */

			// else{
			// 	echo "invalid user..";
			// }

		}else{
			echo "null submission";
		}
	}
?>
