<?php
include "../header.php"?>
<?php
$fichierCours = json_decode(file_get_contents("../../fichiersCours/" . $_POST["identifiant"] . "-cours.json"), true);
$fichierCours[count($fichierCours)+1] = array(
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],
    "telephone" => $_POST["telephone"],
    "age" => $_POST["age"]
);
file_put_contents("../../fichiersCours/" . $_POST["identifiant"] . "-cours.json", json_encode($fichierCours, JSON_PRETTY_PRINT));
$infoCour = json_decode(file_get_contents("../../infoCours.json"), true)[$_POST["identifiant"]];
?>
<p>Vous êtes inscrit au cours suivant</p>
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
        <tr>
            <td><?php echo $_POST["identifiant"] ?></td>
            <td><?php echo $infoCour["prof"] ?></td>
            <td><?php echo $infoCour["date"] ?></td>
            <td><?php echo $infoCour["resume"] ?></td>
            <td><?php echo $infoCour["adresse"] ?></td>
            <td><?php echo $infoCour["sport"] ?></td>
        </tr>
    </tbody>
</table>
<a href="rechercherCours.php">Recherchez d'autres cours.</a>
<?php
include "../footer.html"
?>