<?php
    if (!isset($_GET["genre"])) {
        echo "Veuillez remplir tout les champs ";
        die();
    }
    else if (!isset($_GET["nom"])){
        echo "Veuillez remplir tout les champs";
        die();
    }
    else if (!isset($_GET["prenom"])){
        echo "Veuillez remplir tout les champs";
        die();
    }
    else if (!isset($_GET["codePostal"])){
        echo "Veuillez remplir tout les champs";
        die();
    }
    else if (!isset($_GET["ville"])) {
        echo "Veuillez remplir tout les champs";
        die();
    }
    else if (!isset($_GET["paiement"])) {
        echo "Veuillez remplir tout les champs";
        die();
    }
    else if (!isset($_GET["condition"])) {
        echo "Veuillez valider les CGU";
        die();
    }
    else {
        $prenom=$_GET["prenom"];
        $nom=$_GET["nom"];
        $codePostal=$_GET["codePostal"];
        $ville=$_GET["ville"];
        $paiement=$_GET["paiement"];
        $genre=$_GET["genre"];
        echo "Bonjour $genre $prenom $nom de $ville. Vous avez payé en $paiement.";
    }
?>

