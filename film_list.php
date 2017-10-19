<?php
//$films=["mon ange","les sous doues","tain de karma"]
include_once "./LIB/db.php";
$films=lister();
//var_dump($films);
//array(3) { [0]=> array(8) 
//{ ["id"]=> string(1) "1" [0]=> string(1) "1" ["titre"]=> string(12) "kungfu panda" [1]=> string(12) "kungfu panda" ["annee_prod"]=> string(4) "2000" [2]=> string(4) "2000" ["synopsis"]=> string(6) "tataat" [3]=> string(6) "tataat" } [1]=> array(8) 
//{ ["id"]=> string(1) "2" [0]=> string(1) "2" ["titre"]=> string(3) "tin" [1]=> string(3) "tin" ["annee_prod"]=> string(4) "1947" [2]=> string(4) "1947" ["synopsis"]=> string(9) "jkjhhklhk" [3]=> string(9) "jkjhhklhk" } [2]=> array(8) { ["id"]=> string(1) "3" [0]=> string(1) "3" ["titre"]=> string(22) "tintin et les picaross" [1]=> string(22) "tintin et les picaross" ["annee_prod"]=> string(4) "1954" [2]=> string(4) "1954" ["synopsis"]=> string(13) "adaptation bd" [3]=> string(13) "adaptation bd" } } ;
?>

<!DOCTYPE html>;
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <?php include './_menu.php' ?>;
        <h1>Liste des films</h1>
        <table>
            <caption>Films</caption>
            <thead>
                <th>TITRE</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <tr></tr>
                <?php foreach ($films as $titres){ ?>
                <td><?php echo $titres["titre"]; ?></td>
                
                    
                    <td><a href="film_supprimer.php?id=<?php echo $titres[0]; ?>">supprimer</td>
                    <!--pour recup id films dans titre use $REQUEST et ds titre xxx.php?val1=xx&val2=xxx&val3=xxx--> 
                    <td><a href="film_fiche.php">editer</td>
                    <tr></tr>
                <?php } ?>
                    
            </tbody>
                
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
