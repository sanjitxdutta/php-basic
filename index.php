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
            echo "<br>";  //new-line
            //  Single line comments

            /*THis
            is
            a
            multi-line
            comment  */

            //  variable in php

            $variable1 = 5;
            $variable2 = 2;

            echo $variable1;
            echo $variable2;
            echo $variable1 + $variable2;

            // Operators in php
            // Arithmetic operators
            echo "<br>";  //new-line
            echo "The value of variable1 + variable2 is ";
            echo $variable1 + $variable2;

            echo "<br>";  //new-line
            echo "The value of variable1 - variable2 is ";
            echo $variable1 - $variable2;

            echo "<br>";  //new-line
            echo "The value of variable1 * variable2 is ";
            echo $variable1 * $variable2;

            echo "<br>";  //new-line
            echo "The value of variable1 / variable2 is ";
            echo $variable1 / $variable2;
            
            // Assignment operators
            echo "<br>";
            $newVar = $variable1;
            $newVar += 1;
            $newVar -= 1;
            $newVar *= 2;
            $newVar /= 2;

            echo "The value of new variable is ";
            echo $newVar;
            
            // Comparison operators
            // echo "<h1> Comparison operators </h1>"
            echo "<br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);

            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);

            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);

            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);

            echo "<br>";
            echo "The value of 1>4 is ";
            echo var_dump(1>4);

            echo "<br>";
            echo "The value of 1<4 is ";
            echo var_dump(1<4);

            // Increment/Decrement operators
            echo "<br>";
            echo "The post incremented value of newVar++ is ";
            echo $newVar++;

            echo "<br>";
            echo "The post decremented value of newVar-- is ";
            echo $newVar--;

            echo "<br>";
            echo "The pre decremented value of ++newVar is ";
            echo ++$newVar;

            echo "<br>";
            echo "The pre decremented value of --newVar is ";
            echo --$newVar;

            // Logical operators

            // and (&&)
            // or (||)
            // xor
            // !

            //  Data types in php
            //  1. String
            echo "<br>";
            $var = "This is a string";
            echo var_dump($var);

            //  2. Integer
            echo "<br>";
            $var = 123;
            echo var_dump($var);

            //  3. Float
            echo "<br>";
            $var = 123.123;
            echo var_dump($var);

            //  4. Boolean
            echo "<br>";
            $var = true;
            echo var_dump($var);

            //  5. Array
            //  6. Object

        ?>
    </div>
</body>
</html>