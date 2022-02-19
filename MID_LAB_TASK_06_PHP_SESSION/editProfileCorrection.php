<?php 

    session_start();

    if(isset($_REQUEST['editClick']))
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $dobC = explode(' ', $_REQUEST['dob']);
        $dob =['dd'=>$dobC[0], 'mm' => $dobC[1],'yyyy' => $dobC[2]];

        if($name !=null && $email !=null && $gender !=null && $dob !=null){
			$user = ['name' => $name,'email'=>$email,'gender'=>$gender, 'dob'=>$dob];
			$_SESSION['user'] = $user;
			header('location: viewProfile.php');
		}else{
			echo "null submission";
		}
    }


?>