<?php
    $id=$_GET['id'];
require_once('connexion.php');
$requete="DELETE FROM famille_tbl WHERE id = $id";
$bdd->query($requete);
header ('Location: index.php');
