<?php
    $prenom=$_GET["prenom"];
    $nom=$_GET["nom"];
    $email=$_GET["email"];
    $message=$_GET["message"];
    $message=$_GET["sujet"];
    if (!isset($_GET["condition"])) {
        echo "Merci de bien vouloir cocher les CGU";
    }
    else if ($prenom =! ""){
        echo "Merci de remplir tout les champs";
    }
    else if ($nom =! "") {
        echo "Merci de remplir tout les champs";
    }
    else if ($email =! "") {
        echo "Merci de remplir tout les champs";
    }
    else if ($message =! "") {
        echo "Merci de remplir tout les champs";
    }
    else if ($sujet =! "") {
        echo "Merci de remplir tout les champs";
    }
    else {
        echo "Bonjour $nom $prenom, nous allons prendre contact avec vous rapidement. Cordialement";
        mail($email, "Contact via le site",$message);
    }
?>