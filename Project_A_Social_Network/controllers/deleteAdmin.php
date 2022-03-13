<?php 
    session_start();

    $data = file('../models/admin.txt');
    $username = null;
    $password = null;
    $email = null;

    if(isset($_REQUEST['delete']))
    {
        $id = $_REQUEST['id'];
        $file = fopen('../models/admin.txt','r');
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
        $file = fopen('../models/admin.txt','w');
        fwrite($file, $content);
        header('location: ../views/adminList.php');
    }




?>