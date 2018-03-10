<?php
session_start();
require 'Liste_utilisateurs.php';
if(!isset($_SESSION[utilisateur::class])) {
    utilisateur::class;
}
require 'Headers_footer/header_aide.html'
?>
<div class="main">
    <form action="aide_technique.php" method="post" name="message">
        <label>
            Votre message :
            <input type="text" name="Message" style="height: 100px; width: 300px">
        </label>
        <label>
            Votre capture d'écran:
            <input type="file" value="Votre capture">
        </label>
    </form>
</div>
<?php require 'Headers_footer/footer.html'; ?>