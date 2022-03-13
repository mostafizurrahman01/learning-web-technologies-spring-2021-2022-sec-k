<?php 


    // if(isset($_REQUEST['submit']))
    // {
    //     print_r ($_FILES['myfile']);

    //     $src = $_FILES['myfile']['tmp_name'];
    //     $des = "upload/".$_FILES['myfile']['name'];

    //     if(move_uploaded_file($src, $des))
    //     {
    //         echo "success";
    //     }
    //     else
    //     {
    //         echo "error";
    //     }

    // }

    if (isset($_POST['upload'])) {
        $path_parts = pathinfo($_FILES["imyfile"]["name"]);
        $extension = $path_parts['extension'];
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension =="gif"){
            $img_name = $_FILES['myfile']['name'];
            $tmp_img_name = "upload/"$_FILES['myfile']['tmp_name'];
            move_uploaded_file($tmp_img_name, $img_name);
            // rename($img_name, "image.png");
        }else{
            echo "Invalid file format";
        }

?>