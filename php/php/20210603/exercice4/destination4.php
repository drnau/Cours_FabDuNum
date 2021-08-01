<?php 
    $prenom=$_GET["prenom"];
    $nom=$_GET["nom"];
    $dateDeNaissance=$_GET["date_de_naissance"];
    $age=date("Y")-$dateDeNaissance;
    echo "Bonjour, $prenom $nom, vous avez $age ans. Merci de votre inscription.";
?>