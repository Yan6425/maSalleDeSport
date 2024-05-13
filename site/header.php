<!DOCTYPE html>
<html>
    <head>
        <title>maSalleDeSport</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
    <body>
        <header>
            <titre>ma salle de sport</titre>
        </header>
        <menu>
            <?php session_start() ?>
            <?php if (!isset($_SESSION["login"])): ?>
                <ul>
                    <li><a href="rechercherCours.php">Rechercher un cours</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            <?php elseif ($_SESSION["login"] == "admin"): ?>
                <ul>
                    <li><a href="ajouterSport.php">Ajouter un sport</a></li>
                    <li><a href="ajouterProf.php">Ajouter un prof</a></li>
                    <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            <?php else: ?>
                <ul>
                    <li><a href="ajouterCours.php">Ajouter un cours</a></li>
                    <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            <?php endif ?>
        </menu>
        <content>