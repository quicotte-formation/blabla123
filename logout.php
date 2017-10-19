<?php
session_start();
session_destroy();
//include './_menu.php';
//echo "Session Deconnectée";
header("Location:film_list.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>