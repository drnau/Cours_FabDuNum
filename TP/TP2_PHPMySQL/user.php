<?php
require_once('connexion.php');
$id = $_GET['id'];
$requete = "SELECT * FROM articles where id=$id"; // écriture de la requête
$reponse = $bdd->query($requete); // réalisation de la requête
$result=$reponse->fetch();
if ($result==false){
 echo "utilisateur inconnu";
}else{
 echo "Nom : " .$result['nom']. "<br> Quantité : " .$result['quantite']. "<br>";
}

?>
<a href="index.php">Revenir à la page d'accueil</a>