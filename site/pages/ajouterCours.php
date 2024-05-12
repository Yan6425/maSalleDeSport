<!DOCTYPE html>
<?php
//session_start();
//if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] != "Admin"){
//    header("Location: ../index.php");
//}
include "../header.html"?>
<?php 
$infoProfs = json_decode(file_get_contents("../../infoProfs.json"), true);
?>
<form action="enregistrerCours.php" method="POST">
    <label for="sport">Sport </label>
    <input type="text" name="sport">
    <br>
    <label for="resume">Résumé </label>
    <input type="text" name="resume">
    <br>
    <label for="date">Date du cours </label>
    <input type="date" name="date">
    <br>
    <label for="adresse">Adresse </label>
    <input type="text" name="adresse">
    <br>
    <label for="prof">Liste des professeurs </label>
    <select name="prof" id="prof">
        <?php foreach ($infoProfs as $prof => $info): ?>
            <option value="<?php echo $prof; ?>"><?php echo $prof; ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <button type="submit" value="ajouter">Ajouter</button>
</form>
<?php
include "../footer.html"
?>