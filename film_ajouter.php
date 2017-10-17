<body>
    <a href="login.php"><center>Menu connexion</center></a>
    <br>
    <form action="film_ajouterPOST.php" method="post"
        <label><h1>Nouveau Film</h1></label>
        <br>
        <br>
        <br>
        <label>Titre :</label>
        <textarea name="title"></textarea>
        <br>
        <label>Synopsis : </label>
        <textarea name="resume"></textarea>
        <label>Anné de prod : </label>
        <input name="annee" type="date"/>
        <label>Genre : </label>
        <select name="genre">
            <option>Horreur</option>
            <option>Comédie</option>
            <option>Action</option>
            <option>Science fiction</option>
        </select>
        <center><input type="submit" value="Valider"/></center>
    </form>
</body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


