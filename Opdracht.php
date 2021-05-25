<?php
$redirect = "form.php";

// definieren wat zijn grove woorden, wat zijn aardige woorden
$niceWords = array('lief', 'aardig', 'mooi', 'leuk', 'goed', 'schattebout', 'liefje');
$badWords = array('eikel', 'klootzak', 'sukkel', 'lul', 'kut', 'fuck', 'shit', 'loser');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: "Montserrat", sans-serif;
        font-weight: 500;
        font-size: 16px;
    }
    </style>
</head>

<body>

    <?php
    if (!isset ($_POST['textarea'])) {
        echo "Vul eerst een tekst in...";
    ?>
            <a href=" <?php echo $redirect ?> ">Terug</a>
    <?php } else {  
    $text = $_POST['textarea'];
    ?>
    
    <h2>Deze tekst willen we gaan omzetten:</h2>
    <p><?php echo $text ?> </p>
    <h2>In een tekst met hoofdletters:</h2>
    
    <?php
    // Zinnen op hoofdletters corrigeren
    $capitalizedText = preg_split('/(?<=[.?!;:])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $capitalizedText = array_map('ucfirst', $capitalizedText);

    // Gecorrigeerde woorden weergeven
    $j = count($capitalizedText);
    $matrix = array();
    foreach ($capitalizedText as $sentence) {
        $matrix[] = explode(" ", $sentence);
    }
    $correctedText = array();
    foreach ($matrix as $sentence) {
        $correctedText[] = $sentence[0];
    }
    $capitalizedText = implode(' ', $capitalizedText);
    echo $capitalizedText . "<br>";
    ?>

    <h2>De gecorrigeerde woorden zijn:</h2>
    <p><?php foreach ($correctedText as $word) {
        echo $word . "<br>";
    } ?></p>
    
    <h2>Daarna willen we het aantal grove woorden tellen en vervangen door aardige woorden:</h2>
    <?php
    // tekst omzetten in een array van woorden
    $textArray = str_replace(["\n", ",", "."], " ", $text);
    $textArray = explode(" ", $textArray);
    
    ?>
    <p>Het aantal grove woorden is: </p>
    <?php 
    $sumBadWords = 0;
    for ($i = 0; $i < count($textArray); $i++) {
        for ($j = 0; $j < count($badWords); $j++) {
            if ($textArray[$i] === $badWords[$j]) {
                $sumBadWords++;
            }
        }
    }
    echo $sumBadWords;

    foreach ($badWords as $word) {
        $niceWord = $niceWords[array_rand($niceWords, 1)];
        $text = str_ireplace($word, $niceWord, $text);
    }


    ?>
    <p>De vervangen tekst is: </p>
    <?php
    
    if ($text == null) {
        echo "---";
    } else {
        echo $text;
    }
    // tekst afbreken na x aantal regels
    $textStop = rand(strlen($text), 1);
    $partlyText = substr ($text, 0, $textStop);
    ?>
    
    <h2>We willen de tekst afbreken na <?php echo $textStop ?> tekens:</h2>
    <?php echo $partlyText; ?>....
    <h2>De tekst krijgt ook een grofheidsindicator:</h2>
    <?php 
    // grofheidsindicator tonen
    if ($sumBadWords == 0) {
        echo "<p style='color:green'>$capitalizedText</p>";
    } elseif ($sumBadWords > 0 && $sumBadWords < 3){
        echo "<p style='color:yellow'>$capitalizedText</p>";
    } elseif ($sumBadWords >= 3) {
        echo "<p style='color:red'>$capitalizedText</p>";
    } else {
        echo "<p> ongeldige invoer</p>";
    }
    ?>


<?php 
    } ?>
</body>

</html>