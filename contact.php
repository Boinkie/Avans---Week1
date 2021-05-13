<?php
// write code
?>
<?php include("header.php") ?>
<?php include("navbar.php") ?>

<form action="comment.php" method="post">
    <div class="row">
        <div class="col-25">
            <label for='name'>Naam:</label>
        </div>
        <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Uw naam..."><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for='email'>Email:</label>
        </div>
        <div class="col-75">
            <input type='text' id='email' name='email' placeholder="Uw email-adres..."><br>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for='message'>Bericht:</label>
        </div>
        <div class="col-75">
            <textarea id="message" name="message" placeholder="Schrijf iets..." style="height:200px"></textarea><br>
        </div>
    </div>


    <div class="row">
        <input type='submit' name='submit' value='Verstuur'>
    </div>
</form>

<?php include("footer.php") ?>