<!DOCTYPE html>
<?php
//session_start();
//if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] != "Admin"){
//    header("Location: ../index.php");
//}
include "../header.html"?>
<?php
$infoCours = json_decode(file_get_contents("../../infoCours.json"), true);
?>
<a href="rechercherCours.php">Rechercher un autre cours</a>
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
                <td><a href="inscriptionCours.php?identifiant=<?php echo $identifiant ?>"><button>Inscription</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
include "../footer.html"
?>