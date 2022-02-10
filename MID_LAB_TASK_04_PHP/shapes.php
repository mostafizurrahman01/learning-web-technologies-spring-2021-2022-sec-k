<?php 

    function starPrint()
    {
        for($i = 0; $i <3; $i++)
        {
            for($j = 0; $j <=$i; $j++)
            {
                 echo "*";
            }
            echo "<br>";
        }
    }

    function reversePrintNum()
    {
        for($i = 3; $i >0; $i--)
        {
            for($j = 1; $j <=$i; $j++)
            {
                echo $j;
            }
            
            echo "<br>";
        }
    }

    function stringPrint()
    {
        $input = ['1'=>"A",'2'=>"B C",'3'=>"D E F"];

        foreach($input as $i)
        {
            echo $i."<br>";
        }
    }

    echo "<table border=1 width=500px>
        
        <tr> 
                
                <td>";
                        starPrint();
                echo "</td>
                <td>";
                        reversePrintNum();
                echo "</td>
                <td>";
                        stringPrint();
                echo "</td>

        </tr>

    </table>
    "

?>