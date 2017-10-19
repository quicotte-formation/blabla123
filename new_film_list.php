<?php

include("..")
//$films=["mon ange","les sous doues","tain de karma"]
//lister()
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
                <td><?php echo $titres; ?></td>
                
                    
                    <td><a href="film_ajouter.php">supprimer</td>
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
