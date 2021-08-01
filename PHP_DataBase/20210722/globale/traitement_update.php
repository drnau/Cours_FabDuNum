<?php
require_once('connexion.php');
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$statut = $_GET["statut"];
$id = $_GET["id"];
    $requete="UPDATE famille_tbl SET prenom = '$prenom', nom = '$nom', statut = '$statut' WHERE id = '$id'";
    $bdd->query($requete); // réalisation de la requête
    header ('Location: index.php');
?>
