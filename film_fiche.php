<?php
$fiche = [
        "titre"=>"Dracula",
        "anneeProd"=>2001,
        "genre"=>"Horreur",
        "resume"=>"film à dents"];
?>

<body>
   <form action="formulaire_editor.php" method="get"
        <label><h1>Fiche Film</h1></label>
        <br>
        <br>
        <br>
        <label>Titre :</label>
        <input name="title" value="<?php echo $fiche["titre"] ?>"/>
        <br>
        <label>Synopsis : </label>
        <input name="resume" value="<?= $fiche["resume"] ?>"/>
        <label>Anné de prod : </label>
         <input name="annee" value="<?= $fiche["anneeProd"] ?>"/>
        <label>Genre : </label>
        <select name="genre">
            <option <?php $fiche["genre"]=="Horreur"?"Selected":""?>>Horreur</option>
                    <!--// code php if genre correspond  ?alors :Sinon syntaxe space du if...-->
            <option <?php ($fiche["genre"]=="Comédie"?"Selected":"")?>>Comédie</option>
            <option>Action</option>
            <option>Science fiction</option>
        </select>
        
        <!--autre methode
        <select name="genre">
        <?php //blaise php 
//                    $tab="horreur","comédie"];
//            foreach ($tab as $genre)
               ?> 
        <!-- fermeture balise php pas boucle 
            <option //
                //<?php $fiche["genre"]=="Horreur"?"Selected":""?>>Horreur</option>
            <?php /*}*/ //fermeture boucle foreach ?>
        </select>
        -->
        <center><input type="submit" value="Valider"/></center>
    </form>
</body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


