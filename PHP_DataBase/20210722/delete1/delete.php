<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=famille;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$requete='DELETE FROM `famille_tbl` WHERE `famille_tbl`.`id` = 4'; // écriture de la requête
$bdd->query($requete); // réalisation de la requête