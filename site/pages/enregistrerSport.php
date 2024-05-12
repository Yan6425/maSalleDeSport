<!DOCTYPE html>
<?php
//session_start();
//if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] != "Admin"){
//    header("Location: ../index.php");
//}
include "../header.html"?>
<?php
$infoProfs = json_decode(file_get_contents("../../infoProfs.json"), true);
//if ($_POST["nom"] == "" or $_POST["prenom"] == "" or $_POST["date"] == ""){
//    header("Location : ajouterProf.php");
//}
$login = strtolower($_POST["prenom"])[0] . strtolower($_POST["nom"]);
while (in_array($login, array_keys($infoProfs))) {
    $login = $login . rand(0, 9);
}
$infoProfs[$login] = array(
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],
    "date" => $_POST["date"],
    "mdp" => md5($login)
);
file_put_contents("../../infoProfs.json", json_encode($infoProfs, JSON_PRETTY_PRINT));
?>
<a href="ajouterProf.php">Ajouter un prof</a>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date d'embauche</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($infoProfs as $pseudo => $info): ?>
            <tr>
                <td><?php echo $info["nom"] ?></td>
                <td><?php echo $info["prenom"] ?></td>
                <td><?php echo $info["date"] ?></td>
                <td><?php echo $pseudo ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
include "../footer.html"
?>