<?php

// definieren wat zijn grove woorden, wat zijn aardige woorden
$niceWords = array('lief', 'aardig', 'mooi', 'leuk', 'goed', 'schattebout', 'liefje');
$badWords = array('eikel', 'klootzak', 'sukkel', 'lul', 'kut', 'fuck', 'shit');

// Grove woorden tellen in de tekst en laten weergeven
function findCommonElements($array1, $array2)
{
    $words = 0;
    for ($i = 0; $i < count($array1); $i++) {
        for ($j = 0; $j < count($array2); $j++) {
            if ($array1[$i] === $array2[$j]) {
                $words++;
            }
        }
    }
    echo $words;
}

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

    // Input geven welke tekst je wilt gebruiken
    $originalText = "als je iemand een lul noemt, ben je niet zo erg aardig. het is namelijk een scheldwoord
    en die willen we met dit programma eruit filteren. het is best lastig om zo'n programma te schrijven,
    daarom hoor je regelmatig kut en fuck. maar ook al mag je geen shit zeggen, dat maakt je nog
    niet tot een slechte programmeur.";

    $text = $originalText;

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
    $text = implode(' ', $capitalizedText);
    echo $text . "<br>";
    ?>

    <h2>De gecorrigeerde woorden zijn:</h2>
    <p><?php foreach ($correctedText as $word) {
        echo $word . "<br>";
    } ?></p>
    
    <h2>Daarna willen we het aantal grove woorden tellen en vervangen door aardige woorden:</h2>
    <?php
    // tekst omzetten in een array van woorden
    $textArray = str_replace("\n", " ", $text);
    $textArray = explode(" ", $textArray);
    ?>
    <p>Het aantal grove woorden is: </p>
    <?php 
    $sumBadWords = findCommonElements($textArray, $badWords);
    echo $sumBadWords; ?>
    <p>De vervangen tekst is: </p>
    <?php
    foreach ($badWords as $word) {
        $niceWord = $niceWords[array_rand($niceWords, 1)];
        $correctedText = str_ireplace($word, $niceWord, $text);
    }
    echo $correctedText;

    ?>

</body>

</html>