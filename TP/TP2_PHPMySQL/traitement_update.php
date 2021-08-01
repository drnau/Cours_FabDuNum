<?php
require_once('connexion.php');
$nom = $_GET["nom"];
$quantite = $_GET["quantite"];
$id = $_GET["id"];
    $requete="UPDATE articles SET nom = '$nom', quantite = '$quantite', raison='$raison'  WHERE id = $id";
    $bdd->query($requete); // réalisation de la requête
    header ('Location: index.php');
?>
