<?php
    $listeCouleur=array('bleu','rouge','vert');
    $associatifCouleur =[];
    foreach ($listeCouleur as $couleur){
        $associatifCouleur[$couleur]=$couleur;
    }
    print_r($associatifCouleur);
?>