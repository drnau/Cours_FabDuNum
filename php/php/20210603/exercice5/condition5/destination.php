<?php
    $prenom=$_GET["prenom"];
    $anneeNaissance=$_GET["anneeNaissance"];
    $age=date("Y")-$anneeNaissance;
    
    if ($age>18) {
        echo "Bienvenue $prenom";
    }
    else if ($age==18) {
        echo "Bravos $prenom, à présent tu peux";
    }
    else {
        $avantMajorité=18-$age;
        echo "Désolé $prenom, tu es trop jeune, reviens d'ici $avantMajorité ans.";
    }