<?php
    $prenom=$_GET["prenom"];
    $anneeNaissance=$_GET["anneeNaissance"];
    $age=date("Y")-$anneeNaissance;
    $avantMajorité=18-$age;
    if ($age>18) {
        echo "Bienvenue $prenom";
    }
    else if ($age==18) {
        echo "Bravos $prenom, à présent tu peux";
    }
    else if ($age < 18 && $avantMajorité>1) {
        echo "Désolé $prenom, tu es trop jeune, reviens d'ici $avantMajorité ans.";
    }
    else {
        echo "Désolé $prenom, tu es trop jeune, reviens l'année prochaine.";
    }