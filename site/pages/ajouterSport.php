<!DOCTYPE html>
<?php
//session_start();
//if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] != "Admin"){
//    header("Location: ../index.php");
//}
include "../header.html"?>
<?php 
$profSports = json_decode(file_get_contents("../../infoProfs.json"), true);
?>
<form action="enregistrerSport.php" method="POST">
    <label for="prof">Choisissez une option </label>
    <select name="prof" id="prof">
        <?php foreach ($profSports as $prof => $sports): ?>
            <option value="<?php echo $prof; ?>"><?php echo $prof; ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label for="sport1">Sport 1 </label>
    <input type="text" name="sport1">
    <br>
    <label for="sport2">Sport 2 </label>
    <input type="text" name="sport2">
    <br>
    <button type="submit" value="ajouter">Ajouter</button>
</form>
<?php
include "../footer.html"
?>