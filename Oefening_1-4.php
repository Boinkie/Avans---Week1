<?php
$namen = array("Piet", "Kees", "Jan", "Annabel");
$producten = [
    "Kaas => 2",
    "Melk => 4",
    "Eieren => 16",
    "Boter => 256"
];
$producten2 = [
    [1, "Kaas", 2, 10],
    [2, "Melk", 4, 8],
    [3, "Eieren", 16, 14],
    [4, "Boter", 256, 44]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        
    </style>
</head>
<body>
    <p>Oefening 1<br><br>
    <?php
    echo "<p>$namen[0]</p>";
    echo "<p>$namen[3]</p>";
    ?>
    ------------------------------------------------------------------------------------
    <p>Oefening 2<br>
        <?php
        $namen[2] = "Karel";
        echo "<p>$namen[0]</p>";
        echo "<p>$namen[1]</p>";
        echo "<p>$namen[2]</p>";
        echo "<p>$namen[3]</p>";
        ?>
     </p>
    ------------------------------------------------------------------------------------
    <p>Oefening 3<br><br>
    Product | Voorraad<br>
    
    <?php
    $i = count($producten2);
    for ($j=0; $j < $i; $j++) {
        echo "$producten[$j]<br>";
        } ?>
    </p>
    ---------------------------------------------------------------------------------------
    <p>Oefening 4<br><br>
    ID | Product | Voorraad | Verkocht<br>
    
    <?php
    $i = count($producten);
    for ($j=0; $j < $i; $j++) {
        $array = $producten2[$j];
        foreach ($array as $product) {
        echo "$product => ";
        }
        echo "<br>";
        } ?>
    </p>
    ---------------------------------------------------------------------------------------
    <p>Oefening 5<br><br>
    De functie is strlen($value)<br>

    ---------------------------------------------------------------------------------------
    <p>Oefening 6<br><br>
    De functie is str_replace("Woord1", "Woord2", $value)<br>
    ---------------------------------------------------------------------------------------
    <p>Oefening 7<br><br>
    <?php
    function multiexplode ($vervangen,$woorden) {

        $klaar = str_replace($vervangen, $vervangen[0], $woorden);
        $start = explode($vervangen[0], $klaar);
        foreach ($start as $woord) {
            $woord = strtolower($woord);
            $array[] = $woord;
        }
        return  $array;
    }
    $woorden = "Cultivar a, trifecta instant skinny, espresso, con panna, crema spoon mocha, in coffee, sugar, french press medium latte trifecta instant to go. Breve skinny cinnamon grounds grinder, cortado, dark cup, crema percolator turkish, decaffeinated aromatic aftertaste redeye iced chicory. Single origin, steamed at seasonal, aged iced galão aftertaste beans sweet mug, extra filter, in, cappuccino, white con panna, frappuccino aftertaste frappuccino qui chicory. Grinder medium et so, and java, trifecta, at, extra café au lait trifecta, organic blue mountain coffee dark single origin. Viennese, aroma filter saucer cinnamon and, white, to go, crema coffee so lungo grounds, cultivar percolator french press acerbic americano siphon. Steamed eu est blue mountain, mug decaffeinated cortado strong, so as mug espresso acerbic sugar french press aroma."; 
    $array = multiexplode(array(" ", ",", "."|""), $woorden);
    print_r($array);
    ?>
    </p>
    
    
    
           
</body>
</html>
