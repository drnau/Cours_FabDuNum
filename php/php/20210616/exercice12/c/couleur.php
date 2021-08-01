<?php
    $couleur=array('rouge', 'bleu', 'vert');
    $i=0;
    foreach ($couleur as $uneCouleur){
        $i++;
        echo "$uneCouleur";
        if ($i < sizeof($couleur)){
            echo ", ";
        }
        else {
            echo ".";
        }
    }
?>