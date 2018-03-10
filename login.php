<?php
session_start();
require 'Liste_utilisateurs.php';
if(!isset($_SESSION[utilisateur::class])) {
    utilisateur::class;
}
require 'Headers_footer/header_connec.html';
?>

    <div class="main">
        <!-- espace pour ce connecter -->
        <form action="login.php" method="post" >
            <label>
                Adresse mail du compte :
                <input type="text" name="mail">
            </label>
            <label>
                Mot de passe :
                <input type="text" name="pwds">
            </label>
            <!-- Pour se connecter -->
            <input type="submit" value="Connexion" href="aide_technique.php">
        </form>
    </div>
<?php require 'Headers_footer/footer.html' ?>
