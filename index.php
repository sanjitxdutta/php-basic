<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website.
        <?php
            echo "Hello world and this is printed using php";

            //  Single line comments

            /*THis
            is
            a
            multi-line
            comment  */

            $variable1 = 34;
            $variable2 = 25;

            echo $variable1;
            echo $variable2;
            echo $variable1 + $variable2;
        ?>
    </div>
</body>
</html>