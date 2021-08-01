<?php
    function calculAir($longueur, $largeur){
        $calculAir=$longueur*$largeur;
        echo "L'air du rectangle de longueur ".$longueur.' cm et de largeur '.$largeur.' cm vaut '.$calculAir.'cm².';
    }
    echo calculAir(12,5);

?>