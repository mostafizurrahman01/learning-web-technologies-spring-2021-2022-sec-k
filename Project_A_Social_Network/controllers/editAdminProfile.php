<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];

		if($username != null && $password != null && $email != null){
			
			$file = fopen('../models/admin.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$username."|".$password."|".$email."\r\n";
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../models/admin.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../views/adminList.php');

		}else{
			echo "null submission";
		}
	}
?>