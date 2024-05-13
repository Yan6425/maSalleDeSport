<?php
include "../header.php"?>
<?php 
$infoCour = json_decode(file_get_contents("../../infoCours.json"), true)[$_GET["identifiant"]];
?>
<p>Vous allez vous inscrire au cours suivant</p>
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
            <td><?php echo $_GET["identifiant"] ?></td>
            <td><?php echo $infoCour["prof"] ?></td>
            <td><?php echo $infoCour["date"] ?></td>
            <td><?php echo $infoCour["resume"] ?></td>
            <td><?php echo $infoCour["adresse"] ?></td>
            <td><?php echo $infoCour["sport"] ?></td>
        </tr>
    </tbody>
</table>
<form action="enregistrerInscription.php" method="POST">
    <input type="hidden" name="identifiant" value="<?php echo $_GET["identifiant"] ?>">
    <label for="nom">Nom </label>
    <input type="text" name="nom">
    <br>
    <label for="prenom">Prénom </label>
    <input type="text" name="prenom">
    <br>
    <label for="telephone">Téléphone </label>
    <input type="text" name="telephone">
    <br>
    <label for="age">Âge </label>
    <input type="number" name="age">
    <br>
    <button type="submit" value="inscription">Inscription</button>
</form>
<?php
include "../footer.html"
?>