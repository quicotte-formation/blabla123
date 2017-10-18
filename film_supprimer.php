<?php
include "./LIB/db.php";
$id=$_REQUEST["id"];
supprimerFilm($id);
header("Location:film_list.php");