

<?php
include './LIB/db.php';
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//var_dump ($_REQUEST);
$logins=rechercheUtilParLoginMdp($_REQUEST["identifiant"],$_REQUEST["mdp"]);
//var_dump($logins);

if (count($logins)>=1){ //try isset?
    echo "Login granted";
    $_SESSION["loginUtilConnecte"]=$_REQUEST["identifiant"];
    header("Location: film_list.php");
    exit;
}else{
    echo 'Login refusé';
}

//if ($_REQUEST["identifiant"] == "admin" and $_REQUEST["mdp"]=="admin")
//{
//    echo "Welcome Admin";
//}
//else
//{
//    echo "Connexion refusée";
//}
