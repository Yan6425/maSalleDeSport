<!DOCTYPE html>
<?php
//session_start();
//if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] != "Admin"){
//    header("Location: ../index.php");
//}
include "../header.html"?>
<?php
$infoCours = json_decode(file_get_contents("../../infoCours.json"), true);
//if ($_POST["nom"] == "" or $_POST["prenom"] == "" or $_POST["date"] == ""){
//    header("Location : ajouterProf.php");
//}
do {
    $identifiant = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
} while (in_array($identifiant, array_keys($infoCours)));
$infoCours[$identifiant] = array(
    "prof" => $_POST["prof"],
    "date" => $_POST["date"],
    "resume" => $_POST["resume"],
    "adresse" => $_POST["adresse"],
    "sport" => $_POST["sport"]
);
file_put_contents("../../infoCours.json", json_encode($infoCours, JSON_PRETTY_PRINT));
?>
<a href="ajouterCours.php">Ajouter un cours</a>
<table>
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Prof</th>
            <th>Date</th>
            <th>Résumé</th>
            <th>Adresse</th>
            <th>Sport</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($infoCours as $identifiant => $info): ?>
            <tr>
                <td><?php echo $identifiant ?></td>
                <td><?php echo $info["prof"] ?></td>
                <td><?php echo $info["date"] ?></td>
                <td><?php echo $info["resume"] ?></td>
                <td><?php echo $info["adresse"] ?></td>
                <td><?php echo $info["sport"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
include "../footer.html"
?>