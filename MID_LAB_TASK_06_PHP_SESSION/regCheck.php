<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirmPassword'];
		

		if($username != null && $password != null && $email != null){
			$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			$_SESSION['user'] = $user;
			header('location: login.php');
		}else{
			echo "null submission";
		}
	}
?>