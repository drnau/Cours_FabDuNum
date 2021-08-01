<?php
try
{
    $bdd = new PDO('mysql:host=mysql-alexandrenau.alwaysdata.net;dbname=alexandrenau_msql;charset=utf8', '237903', '*Bordeaux33*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>