<?php
include "../header.php"?>
<?php 
$infoProfs = json_decode(file_get_contents("../../infoProfs.json"), true);
?>
<form action="resultatsRechercheCours.php" method="POST">
    <label for="sport">Sport </label>
    <input type="text" name="sport">
    <br>
    <button type="submit" value="rechercher">Rechercher cours</button>
</form>
<?php
include "../footer.html"
?>