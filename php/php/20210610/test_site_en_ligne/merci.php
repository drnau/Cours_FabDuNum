<?php
    $prenom = $_GET["prenom"];
    $nom = $_GET["nom"];
    $message = $_GET["message"];
    if (isset($_GET["condition"])) {
        echo "Bonjour $prenom $nom, merci pour votre message";
        mail('anau@fabdunum.fr', $_GET["sujet"], $_GET["demande"]);
    }
    else {
        echo "Conditions réfusées. ";
    }
    
?>