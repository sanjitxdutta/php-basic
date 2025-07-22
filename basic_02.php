<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width:80%;
            background-color: black;
            margin: auto;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's Learn About PHP</h1>
        THis is a container
        <br>
        <?php
            $age = 7;
            if ($age > 18){
                echo "You can drive";
            } else if ($age == 7){
                echo "You are 7 years old";
            } else {
                echo "You can not drive";
            }
        ?>
    </div>
</body>
</html>