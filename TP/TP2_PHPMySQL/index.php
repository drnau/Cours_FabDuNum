<?php
require_once('connexion.php');
$requete = 'SELECT * FROM articles ORDER BY RAND()'; // écriture de la requête
$reponse = $bdd->query($requete); // réalisation de la requête
$result=$reponse->fetch();
if ($result==false){
 echo "article inconnu";
}else{
 echo " Nom de l'article : " . $info['nom'] . ", quantité : " . $info['quantite'] . " <a href='user.php?id=$id'><button>Voir</button></a> <a href='formulaire.php?id=$id&action=edit'><button>Modifier</button></a> <a href='delete.php?id=$id'><button>X</button></a><br>";
}

?>
<a href="formulaire.php?action=add">Ajouter un nouvel article</a>