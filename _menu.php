<?php // echo @$_SESSION["loginUtilConnecte"]; ?>
<?php
session_start();
//    var_dump(@$_SESSION["loginUtilConnecte"]);
if (@$_SESSION["loginUtilConnecte"] == "" or !isset($_SESSION["loginUtilConnecte"])) {
    ?>
    <a href = "login.php">Connexion</a>
    <?php
} else {
//    var_dump($_SESSION["loginUtilConnecte"]);

    echo "$_SESSION["loginUtilConnecte"]";
    ?>
    <a href = "logout.php">Deconnexion</a>;
    <?php
    
}
?>
<br>
<a href="film_list.php">Liste</a>
<a href="film_ajouter.php">Nouveau</a>
