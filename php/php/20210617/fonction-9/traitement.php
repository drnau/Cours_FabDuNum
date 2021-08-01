<?php
    $longueur=$_GET["longueur"];
    $largeur=$_GET["largeur"];
    function calculAir($longueur, $largeur){
        $calculAir=$longueur*$largeur;
        echo "L'air du rectangle de longueur ".$longueur.' cm et de largeur '.$largeur.' cm vaut '.$calculAir.'cm².';
    }
    echo calculAir($longueur,$largeur);
?>