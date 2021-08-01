<?php
require_once('connexion.php');
$requete = 'SELECT * FROM famille_tbl '; // écriture de la requête
$reponse = $bdd->query($requete); // réalisation de la requête
foreach ($reponse as $info) {
    $id = $info['id'];
    $nom=$info['nom'];
    $prenom=$info['prenom'];
    $statut=$info['statut'];
    echo " Nom : " . $info['nom'] . ", Prenom : " . $info['prenom'] . " <a href='user.php?id=$id'><button>Voir</button></a> <a href='formulaire.php?id=$id&action=edit'><button>Modifier</button></a> <a href='delete.php?id=$id'><button>X</button></a><br>";
}

?>
<a href="formulaire.php?action=add">Ajouter un nouvel utilisateur</a>