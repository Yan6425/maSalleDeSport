<?php
include "../header.php"?>
<?php
$profSports = json_decode(file_get_contents("../../profSports.json"), true);
$profSports[$_POST["prof"]] = array(
    "sport1" => $_POST["sport1"],
    "sport2" => $_POST["sport2"]
);
file_put_contents("../../profSports.json", json_encode($profSports, JSON_PRETTY_PRINT));
?>
<a href="ajouterSports.php">Ajouter un sport</a>
<table>
    <thead>
        <tr>
            <th>Prof</th>
            <th>Sport 1</th>
            <th>Sport 2</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($profSports as $prof => $sports): ?>
            <tr>
                <td><?php echo $prof ?></td>
                <td><?php echo $sports["sport1"] ?></td>
                <td><?php echo $sports["sport2"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
include "../footer.html"
?>