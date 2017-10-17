

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//var_dump ($_REQUEST);

if ($_REQUEST["identifiant"] == "admin" and $_REQUEST["mdp"]=="admin")
{
    echo "Welcome Admin";
}
else
{
    echo "Connexion refusée";
}
