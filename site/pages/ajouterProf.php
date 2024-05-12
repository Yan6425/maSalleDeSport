<!DOCTYPE html>
<?php
//session_start();
//if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] != "Admin"){
//    header("Location: ../index.php");
//}
include "../header.html"?>
<?php if(isset($_GET["incorrect"])): ?>
    <span id ="incorrect">Informations non complètes</span>
<?php endif; ?>
<form action="enregistrerProf.php" method="POST">
    <label>Nom </label><input type="text" name="nom">
    <br>
    <label>Prénom </label><input type="text" name="prenom">
    <br>
    <label>Date d'embauche </label><input type="date" name="date">
    <br>
    <button type="submit" value="ajouter">Ajouter</button>
</form>
<?php
include "../footer.html"
?>