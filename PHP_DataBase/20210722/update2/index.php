<?php
$id = $_GET['id'];
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$requete="UPDATE famille_tbl SET prenom = 'Jacques' WHERE id = $id";
$bdd->query($requete);
?>