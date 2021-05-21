<?php
$students = array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel"),
    array("first_name" => "Mila", "score" => 9.7, "last_name" => "Jansen"),
    array("first_name" => "Cees", "score" => 5.6, "last_name" => "Pietersen")
);

foreach ($students as $student) {
    for ($i = 0; $i < count($students); $i++) {
        $id = $i;
        $students[$i]["id"] = $id;
    }
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
        th {
            background-color: lightgrey;
        }

        td {
            border: 1px solid black;
        }

        .green {
            background-color: green;
        }
    </style>
</head>

<body>
    <p>Oefening 1</p>
    <table>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Cijfer</th>
        <?php

        foreach ($students as $student) {
            echo "<tr><td>" . $student['id'] . "</td>";
            echo "<td>" . $student['first_name'] . "</td>";
            echo "<td>" . $student['last_name'] . "</td>";
            echo "<td>" . $student['score'] . "</td></tr>";
        }

        ?>
    </table>

    -------------------------------------------------------------------------------
    <p>Oefening 2</p>
    <table>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Cijfer</th>
        <?php
        foreach ($students as $key => $row) {
            $score[$key] = $row['score'];
            $score = array_column($students, 'score');
            array_multisort($score, SORT_DESC, $students);
        }

        $count = 0;
        foreach ($students as $student) {
            for ($i = 0; $i < 1; $i++) {
                if ($count == 0) {
                    echo "<tr class = green><td>" . $student['id'] . "</td>";
                    echo "<td>" . $student['first_name'] . "</td>";
                    echo "<td>" . $student['last_name'] . "</td>";
                    echo "<td>" . $student['score'] . "</td></tr>";
                } else {
                    echo "<tr><td>" . $student['id'] . "</td>";
                    echo "<td>" . $student['first_name'] . "</td>";
                    echo "<td>" . $student['last_name'] . "</td>";
                    echo "<td>" . $student['score'] . "</td></tr>";
                }
                $count++;
            }
        }
        ?>
    </table>

</html>