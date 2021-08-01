<?php
require_once('connexion.php');
$action = $_GET['action'];
if ($action == 'add') {
    $nom ="";
    $prenom="";
    $statut="";
    $idinf="";
    $traitement="traitement_ajout.php";
} 
else if ($action =='edit') {
    $id = $_GET['id'];
    $requete = "SELECT * FROM famille_tbl where id=$id"; // écriture de la requête
    $reponse = $bdd->query($requete); // réalisation de la requête
    foreach ($reponse as $info) {
        $nom = $info['nom'];
        $prenom = $info['prenom'];
        $statut = $info['statut'];
        $idinf = $info['id'];
        $traitement="traitement_update.php";
    }
}
?>
<form action="<?php echo $traitement ?>" method="GET">
    <input type="hidden" name="id" value="<?php echo $idinf ?>">
    Nom :<input type="text" name="nom" value="<?php echo $nom ?>"><br>
    Prénom :<input type="text" name="prenom" value="<?php echo $prenom ?>"><br>
    Status dans la famille :<input type="text" name="statut" value="<?php echo $statut ?>"><br>
    <input type="submit">
</form>