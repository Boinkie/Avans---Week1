<?php
// BMI formule gewicht (kg) / (lengte (m) x lengte (m))
$weight = 70;
$length = 1.68;
$bmi = $weight / ($length * $length);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h3>Welkom bij de BMI tester!</h3>
    <p>U heeft een: </p>

<?php
switch ($bmi) {
    case ($bmi < 18.5):
        echo "<p>Ondergewicht</p>";
        break;
    case ($bmi > 18.5 && $bmi < 25):
        echo "<p>Gezond gewicht</p>";
        break;
    case ($bmi > 25 && $bmi < 30);
        echo "<p>Overgewicht'</p>";
        break;
    case ($bmi > 30);
    echo "<p>Obesitas</p>";
    break;
} ?>
    
</body>
</html>