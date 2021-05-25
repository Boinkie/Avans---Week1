<?php
// hieronder staan 3 stukjes tekst om te testen. copy en paste in het formulier....

// hallo eikel, ik heb je altijd al onaardig gevonden, loser.
// als je iemand een lul noemt, ben je niet zo erg aardig. het is namelijk een scheldwoord en die willen we met dit programma eruit filteren. het is best lastig om zo'n programma te schrijven, daarom hoor je regelmatig kut en fuck. maar ook al mag je geen shit zeggen, dat maakt je nog niet tot een slechte programmeur.
// dit is een leuke tekst over bloemetjes en bijtjes. heel onschuldig en er staan geen vieze scheldwoorden in.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
</head>

<body>

    <form method="post" action="Opdracht.php">
        <label for="textarea"><h2>Vul hier een tekst in om deze te controleren op grofheid</h2></label>
        <textarea id="textarea" name="textarea" value="text" rows="6" cols="100"
            placeholder="Vul hier je tekst in..."></textarea><br>
        <input type="submit" value="submit">
    </form>

</body>

</html>