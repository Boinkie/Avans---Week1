<?php 
echo $hello;

$Aanhef = "Mevrouw";
$Voornaam = "Anja";
$Achternaam = "Rentier";
$Straat = "Jansoniusstraat 1";
$Postcode = "1234AA";
$Woonplaats = "Amsterdam";
$Land = "Nederland";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avans+</title>
</head>
<body>
    <h1><?php echo "Hello " . $Aanhef . ' ' . $Voornaam . "!"?></h1>
    <p><?php echo $Voornaam . " " . $Achternaam . '<br>';
    echo $Straat . '<br>';
    echo $Postcode . ' ' . $Woonplaats . '<br>';
    echo $Land . '<br>';
    ?></p>
    


    
</body>
</html>