<?php
    $genre=$_GET["sexe"];
    $nom=$_GET["nom"];
    function monsieurMadame($genre){
        if ($_GET["sexe"]=="monsieur"){
            return "Monsieur";
        }
        else {
            return "Madame";
        }
    }
    
    function nomEnGras($nom){
        return "<strong>$nom</strong>";
    }  
    $prenom=$_GET["prenom"];
    $anneeNaissance=$_GET["annee"];
    $age=date("Y")-$anneeNaissance;
    if (!isset($_GET["condition"])) {
        echo monsieurMadame($genre)." ".nomEnGras($nom)." $prenom, vous avez $age ans. Vous n'avez pas coché les CGU";   
    }
    else {
        echo monsieurMadame($genre)." ".nomEnGras($nom)." $prenom, vous avez $age ans. Vous avez coché les CGU.";
    }    
?>