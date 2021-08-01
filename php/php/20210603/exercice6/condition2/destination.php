<?php
    $prenom=$_GET["prenom"];
    $anneeNaissance=$_GET["anneeNaissance"];
    $sexe=$_GET["sexe"];
    $age=date("Y")-$anneeNaissance;
    $avantMajorité=18-$age;
    if ($sexe=="Homme") {
        echo "Vous êtes un garçon. ";
    }
    else {
        echo "Vous êtes une fille. ";
    }
    if ($age>18) {
        echo "Bienvenue $prenom. ";
    }
    else if ($age==18) {
        echo "Bravos $prenom, à présent tu peux. ";
    }
    else {
        echo "Désolé $prenom, tu es trop jeune, reviens d'ici $avantMajorité ans. ";
    } 
    if (isset($_GET["condition"])) {
        echo "Conditions acceptées. ";
    }
    else {
        echo "Conditions réfusées. ";
    }
    ?>