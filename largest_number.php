<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest_Number</title>
</head>

<body style="text-align: center; margin: 300px; background-color:lightslategrey; color: white; ">
    
    <div class="Numbers" style="text-align: center;">
        <h3 style="font-weight:300">First Number is : 4</h3>
        <h3 style="font-weight:300">Second Number is :5</h3>
        <h3 style="font-weight:300">Third Number is :6</h3>
    </div>

    <?php

    // Input the three numbers 
    // and store it in variable 

    $num1 = 4;
    $num2 = 5;
    $num3 = 6;

    // Using the max function to find the largest number 

    if ($num1 > $num2 && $num1 > $num3) {
        echo "The largest number is: $num1";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "The largest number is: $num2";
    } else {
        echo "<h2>The largest number is :$num3";
    }

    ?>

</body>

</html>