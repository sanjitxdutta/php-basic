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
            // if-else
            $age = 7;
            if ($age > 18){
                echo "You can drive";
            } else if ($age == 7){
                echo "You are 7 years old";
            } else {
                echo "You can not drive";
            }

            echo "<br>";

            //  array
            $languages = array("Python", "c", "java");
            echo $languages[1];
            echo "<br>";

            //  array-methods
            echo count($languages);
            echo "<br>";

            // Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }


        ?>
    </div>
</body>
</html>