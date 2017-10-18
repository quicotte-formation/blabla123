<html><body>

        <?php
        ;
        include "./LIB/db.php";

//var_dump($_REQUEST);
        $titre = $_REQUEST["title"];
        $anneeProd = $_REQUEST["annee"];
        $synopsis = $_REQUEST["resume"];
        dbAjouterFilm($titre, $anneeProd, $synopsis);
//echo "Entree sauvegardée -> "<html><a href="film_ajouter.php">Retourner au formulaire</a></html>; ===NAN mettre dans code html, & transp avec SDK
//        echo "Entree sauvegardée -> " . "<a href="film_ajouter.php">Retourner au formulaire</a>";
//        MARCHE PAS====
        ?>
    </body></html>

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

