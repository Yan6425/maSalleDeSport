<?php
$infoProfs = json_decode(file_get_contents("../../infoProfs.json"), true);
if ($_POST["login"] == "admin" and $_POST["mdp"] == "admin" or
    in_array($_POST["login"], array_keys($infoProfs)) and $_POST["mdp"] == $infoProfs[$_POST["login"]]["mdp"]){
    session_start();
    $_SESSION["login"] = $_POST["login"];
    header("Location: ../index.php");
}
else {
    header("Location: connexion.php");
}
?>