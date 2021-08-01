<?php
    $prenom=$_GET["prenom"];
    $anneeNaissance=$_GET["anneeNaissance"];
    $sexe=$_GET["sexe"];
    $age=date("Y")-$anneeNaissance;
    $avantMajorité=18-$age;
    $captcha=$_GET["captcha"];
    $mot ="terre";
    $pos=stripos($captcha, $mot);
    if ($pos === false) {
        echo "La réponse à la question : 'Sur quelle planète vivons nous ?' est incorrecte.";
        die(); 
    }
    else if ($sexe=="Homme") {
        echo "Vous êtes un garçon. ";
    }
    else {
        echo "Vous êtes une fille. ";
    }
    if ($age>18) {
        echo "Bienvenue $prenom. ";
    }
    else if ($age==18) {
        echo "Bravo $prenom, à présent tu peux. ";
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