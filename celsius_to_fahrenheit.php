<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius_to_Fahrenheit</title>
</head>

<body style="text-align: center; margin: 300px; background-color:lightslategrey; color: white; ">
    <div class="title">
        <h1 style="font-size:56px;">Celsius to Fahrenheit Conversion</h1>
    </div>
    <?php

    $temperature_celsius = 32;

    $temperature_farenheit = ($temperature_celsius * 9 / 5) + 32;

    printf("The Farenheit Temperature is %.2f", $temperature_farenheit);

    ?>

</body>

</html>