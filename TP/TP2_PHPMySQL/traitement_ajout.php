<?php
require_once('connexion.php');
$nom = $_GET["nom"];
$quantite = $_GET["quantite"];
$raison = $_GET["raison"];
    $requete="INSERT INTO articles (nom, quantite, raison) VALUES ('$nom', '$quantite', '$raison') ";
    $bdd->query($requete); // réalisation de la requête
    header ('Location: index.php');
