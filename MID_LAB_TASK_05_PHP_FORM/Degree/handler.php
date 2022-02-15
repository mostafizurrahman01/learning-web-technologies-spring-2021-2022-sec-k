<?php 
    if (isset($_REQUEST['submit']))
    {
        if($_REQUEST['degree'] == null){
            echo "Please enter a degree";
        }
        else{
            echo "Degree: ".$_REQUEST['degree'];
        }
    }

?>