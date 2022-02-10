<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2D Array</title>
</head>

<body>

    <table border="1" width="700px">
        <tr height="50px">
            <td align="center">
                <h3>The array to declare</h3>
            </td>
            <td colspan="2" align="center">
                <h3>Shapes to print</h3>
            </td>

        </tr>
        <tr>
            <td align="center">
                <table border="1" width="20%">
                    <tr height="20px">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>A</td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>B</td>
                        <td>C</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>D</td>
                        <td>E</td>
                        <td>F</td>
                    </tr>

                </table>
            </td>



            <td>


                <?php 
                        for($i = 3; $i >0; $i--)
                        {
                            for($j = 1; $j <=$i; $j++)
                            {
                                echo $j;
                            }
                            
                            echo "<br>";
                        }
                ?>

            </td>

            <td>

                <?php 
                        $input = ['1'=>"A",'2'=>"B C",'3'=>"D E F"];

                        foreach($input as $i)
                        {
                            echo $i."<br>";
                        }
                ?>

            </td>


        </tr>



</body>

</html>