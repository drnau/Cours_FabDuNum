<?php
require_once('connexion.php');
$action = $_GET['action'];
if ($action == 'add') {
    $nom ="";
    $quantite="";
    $raison="";
    $idinf="";
    $traitement="traitement_ajout.php";
} 
else if (isset($_GET['id'])&& $action =='edit') {
    $id = $_GET['id'];
    $requete = "SELECT * FROM articles where id=$id"; // écriture de la requête
    $reponse = $bdd->query($requete); // réalisation de la requête
    foreach ($reponse as $info) {
        $nom = $info['nom'];
        $quantite = $info['quantite'];
        $idinf = $info['id'];
        $raison=$info['raison'];
        $traitement="traitement_update.php";
    }
}
?>
<form action="<?php echo $traitement ?>" method="GET">
    <input type="hidden" name="id" value="<?php echo $idinf ?>">
    Nom de l'article :<input type="text" name="nom" value="<?php echo $nom ?>"><br>
    Quantité :<input type="text" name="quantite" value="<?php echo $quantite ?>"><br>
    Raison :<input type="text" name="raison" value="<?php echo $raison ?>"><br>
    <input type="submit">
</form>