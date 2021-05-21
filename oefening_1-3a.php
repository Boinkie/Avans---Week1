<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 1.3</title>
</head>
<body>
    <?php
    $name = "Jantje";
    $age = 18;
    $single = true;
    $shirt = "paars";
    $checkShirt = array("blauw", "rood", "wit", "oranje");
    ?>

    <h1>Welkom op het HOLLAND feest!</h1>
    <p>Uw naam mag niet Pietje zijn.<br>
    U moet 18 jaar of ouder zijn.<br>
    U moet single zijn, u mag geen relatie hebben.<br>
    U moet een shirt hebben in de kleur oranje, rood, wit of blauw. </p>
    
    <?php
    // check name and age
    if ($name == "Pietje") {
        echo "<p>Helaas, u mag niet op het feest komen</p>";
    } else {
        if ($age < 18) {
            echo "<p>Helaas, u bent te jong voor dit feest</p>";
        }
    }
    // check relation status
    if (!$single) {
        echo "<p>Helaas, op dit feest zijn alleen singles toegelaten</p>";
    }
    // check shirt color
    $colormatch = array_search("$shirt", $checkShirt);
    echo $colormatch;
    if (!is_numeric($colormatch)) {
        echo "<p>Helaas, u heeft het verkeerde kleur shirt aan</p>";
    } else {
        "<p>Proficiat, u voldoet aan alle eisen. Wij wensen u een prettig feest</p>";
    }
?>
</body>
</html>