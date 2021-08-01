<?php
require_once('connexion.php');
$id = $_GET['id'];
$requete = "SELECT * FROM famille_tbl where id=$id"; // écriture de la requête
$reponse = $bdd->query($requete); // réalisation de la requête
// foreach ($reponse as $info) {
//     $nom = $info['nom'];
//     $prenom = $info['prenom'];
//     $statut = $info['statut'];
//     echo "Nom : " . $nom . "<br> Prenom : " . $prenom . "<br> Statut :  " . $statut . "<br>";
// } pas opti
$result=$reponse->fetch();
if ($result==false){
 echo "utilisateur inconnu";
}else{
 echo "Nom : " .$result['nom']. "<br> Prenom : " .$result['prenom']. "<br> Statut : " .$result['statut']. "<br>";
}

?>
<a href="index.php">Revenir à la page d'accueil</a>