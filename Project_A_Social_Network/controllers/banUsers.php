<?php 

    session_start();

    $data = file('../models/user.txt');
    $username = null;
    $password = null;
    $email = null;

    if(isset($_REQUEST['update']))
    {
        $id = $_REQUEST['id'];
        $file = fopen('../models/user.txt','r');
        $content = "";
        
        while(!feof($file))
        {
            $line = fgets($file);
            $user = explode('|',$line);
            if($user[0] != $id)
            {
                
                $content .= $line;
                
            }
        }
        $file = fopen('../models/user.txt','w');
        fwrite($file, $content);
        header('location: ../views/userlist.php');
    }

?>








<?php
// session_start();

// // $data = file('../models/user.txt');
// // $id=null;
// // $username = null;
// // $password = null;
// // $email = null;

// if(isset($_REQUEST['update']))
// {
// 	$id = $_REQUEST['id'];
//     // $id = $_REQUEST['id'];
//     $file = fopen('../models/user.txt','r');

//     // $content = "";

//     // while(!feof($file))
//     // {
//     //     $line = fgets($file);
//     //     $user = explode('|',$line);
//     //     var_dump($user);
//     //     $content .= $line;
//     // }
//     // $file = fopen('../models/bannedUser.txt','w');
//     // fwrite($file, $content);
//     // fclose($file);
    
//     while(!feof($file))
//     {
//         $line = fgets($file);
//         $user = explode('|',$line);
//         $_SESSION['current_user'] = $userArray;
//         $content = "";
//         if($userArray[0] == $id)
//         {
//             $userArray[4] ='Inactive';
//             // $line = $id."|".$username."|".$password."|".$email."|"."$user[4]"."\r\n";
//             $line = $userArray[4];
//         }
//         // $updatedContent .= $line;
//     }


//     $file = fopen('../models/user.txt','w');
//     fwrite($file, $line);
//     header('location: ../views/userlist.php');
// }


?>


