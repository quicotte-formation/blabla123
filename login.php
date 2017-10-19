<body>
    <!--<a href="film_ajouter.php"><center>Ajouter Film</center></a>-->
    <?php include './_menu.php' ?>;
    <br>
    <h1>Menu Utilisateur</h1>
    <form action="login_post.php" method="post">
        
        <br>
        <br>
        <br>
        <label>Login :</label>
        <input name="identifiant"/>
        <br>
        <label>Mot de passe : </label>
        <input name="mdp" type="password">
        <center><input type="submit" value="Valider"/></center>
    </form>
</body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

