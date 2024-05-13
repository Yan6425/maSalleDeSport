<?php
include "../header.php"?>
<?php if(isset($_GET["incorrect"])): ?>
    <span id ="incorrect">Indentifiants incorrects</span>
<?php endif; ?>
<form action="verifierConnexion.php" method="POST">
    <label for="login">Login </label>
    <input type="text" name="login">
    <br>
    <label for="mdp">Mot de passe </label>
    <input type="password" name="mdp">
    <br>
    <button type="submit" value="connexion">Connexion</button>
</form>
<?php
include "../footer.html"
?>