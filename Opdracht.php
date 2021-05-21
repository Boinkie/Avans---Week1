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
    return $words;
}



// Grove woorden vervangen voor aardige woorden.
function replace($text, $searchWord, $replaceWord)
{
    foreach ($searchWord as $word) {
        $replace = array_rand($replaceWord, 1);
        str_replace($word, $replace, $text);
    }
}

// Grove woorden uit de tekst tellen en tonen
function countBadWords($textArray, $badWord, $replacedWords)
{
    foreach ($textArray as $value) {
        if (strpos($value, $badWord) !== false) {
            $replacedWords[] = $value;
            if (empty($replacedWords)) {
                echo "<p>No matches found.</p>";
            } else {
                echo "<p> " . $badWord . " was found in: " . implode('; ', $replacedWords) . "</p><br>";
            }
        }
    }
    }
    $randomWoordUitArray = $niceWords[rand(0, count($niceWords)-1)];

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
    $text = "als je iemand een lul noemt, ben je niet zo erg aardig. het is namelijk een scheldwoord
    en die willen we met dit programma eruit filteren. het is best lastig om zo'n programma te schrijven,
    daarom hoor je regelmatig kut en fuck. maar ook al mag je geen shit zeggen, dat maakt je nog
    niet tot een slechte programmeur.";
    ?>
    <h2>Deze tekst willen we gaan omzetten:</h2>
    <p><?php echo $text ?> </p>
    <h2>In een tekst met hoofdletters:</h2>
    
    <?php
    // Zinnen op hoofdletters corrigeren
    $text = preg_split('/(?<=[.?!;:])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $text = array_map('ucfirst', $text);
    $text = implode(' ', $text);
    echo $text . "<br>";
    array_diff()
    ?>
    <h2>De gecorrigeerde woorden zijn:</h2>
    <p><?php ?></p>
    <p>Daarna willen we het aantal grove woorden tellen en vervangen door aardige woorden:</p>
    



    <?php
    // tekst omzetten in een array van woorden
    $textArray = str_replace("\n", " ", $text);
    $textArray = explode(" ", $textArray);
    print_r($textArray);

    
    

    

    $sumBadWords = findCommonElements($textArray, $badWords);
    echo $sumBadWords;
    $replacedWords = array();
    countBadWords($textArray, $badWords, $replacedWords);
    //var_dump($replacedWords);

    ?>

</body>

</html>