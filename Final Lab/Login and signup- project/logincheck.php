<?php 
	session_start();
	require('../models/userModel.php');

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){

			$status = login($username, $password);
			$user = fgets($file); //fgets return one line. 
				$userArray= explode('|',$user);

				if($status){
				$_SESSION['status'] = true;
				// $_SESSION['current_user'] = $userArray;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/home.php');

			// $file = fopen('../models/user.txt','r');
			// while(!feof($file))
			// {		
			// 	$user = fgets($file); //fgets return one line. 
			// 	$userArray= explode('|',$user);

			// 	if(trim($userArray[0]) == $username && trim($userArray[1]) == $password){
			// 	$_SESSION['status'] = true;
			// 	$_SESSION['current_user'] = $userArray;
			// 	setcookie('status', 'true', time()+3600, '/');
			// 	header('location: ../views/home.php');
			// 	}
			}
			else {
				echo "invalid";
			}
			
			
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
