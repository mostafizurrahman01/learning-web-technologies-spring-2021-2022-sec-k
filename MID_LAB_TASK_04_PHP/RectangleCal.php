<?php 

    function rectangleArea($length,$width)
    {
        $area = $length * $width;
        echo "The area of a Rectangle = " .$area;
    }

    function rectanglePerimeter($length,$width)
    {
        $perimeter = 2 * ($length + $width);
        echo "The area of a Perimeter = " .$perimeter;
    }

    $length = 20;
    $width = 15;

    rectangleArea($length,$width); echo "\n";
    rectanglePerimeter($length,$width);

?>