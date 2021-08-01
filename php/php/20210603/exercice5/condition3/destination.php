<?php
    $prenom=$_GET["prenom"];
    $anneeNaissance=$_GET["anneeNaissance"];
    $age=date("Y")-$anneeNaissance;
    if ($age > 18) {
        echo "Bienvenue $prenom.";
    }
    else if ($age == 18) {
        echo "Bravo $prenom, à présent tu peux rentrer.";
    }
    else {
        echo "Désolé $prenom, tu es trop jeune.";
    }
?>