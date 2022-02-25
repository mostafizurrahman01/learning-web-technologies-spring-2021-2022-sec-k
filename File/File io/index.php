<?php 

     /*$file = fopen('user.txt','r');
     $content = fread($file, filesize('user.txt'));
     echo $content;
     fclose($file);*/
    
    /*$file = fopen('user.txt','w');
    fwrite($file,'...edited');
    echo "done editing";
    fclose($file);*/
    

    //apend is better
    $file = fopen('user.txt','a');
    fwrite($file, "...edited\r\n");
    echo "done";
    fclose($file);

    


?>