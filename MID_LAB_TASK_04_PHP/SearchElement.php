<?php 

    $array = [10,20,30,40,50,60,70,80,90,100,110,120];
    $search = 80;

    for ($i = 0; $i <12; $i++)
    {
        if($array[$i] == $search)
        {
            echo $array[$i]." number is found in the array";
        }
    }


?>