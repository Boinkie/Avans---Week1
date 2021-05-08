<?php
$students = array(
  array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
  array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
  array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
);

foreach ($students as $student) {
    for ($i = 0; $i < count($students); $i++) {
        $id = $i;
        $students[$i]["id"] = $id;
    }   
}

function array_orderby()
{
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
        foreach ($student as $key => $row) {
        $score[$key] = $row['score'];
        $score = array_column($students, 'score');
        array_multisort($score, SORT_DESC, $students);
        }
        
        foreach ($students as $student) {
        echo "<tr><td>" . $student['id'] . "</td>";
        echo "<td>" . $student['first_name'] . "</td>";
        echo "<td>" . $student['last_name'] . "</td>";
        echo "<td>" . $student['score'] . "</td></tr>";
        }
    
        
        
?>
</table>

</html>