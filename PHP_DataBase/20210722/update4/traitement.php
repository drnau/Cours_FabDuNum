<?php
$id= $_GET["id"];
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$statut = $_GET["statut"];
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    $requete="UPDATE famille_tbl SET prenom = '$prenom', nom = '$nom', statut = '$statut' WHERE id = $id";
    $bdd->query($requete); // réalisation de la requête
    header ('Location: index.php');
?>