<?php
// write code
?>
<?php include("header.php") ?>
<?php include("navbar.php") ?>
<p>U heeft het volgende bericht verstuurd:</p><br>
<?php
if (isset ($_POST)) {
    foreach ($_POST as $value) {
        if ($value !== 'Verstuur') {
            echo "<p>$value</p>";
    }
}
}

?>
<?php include("footer.php") ?>