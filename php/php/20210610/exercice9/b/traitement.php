<?php
    $tableauAssociatif = array ('Poitiers'=>86000,'Paris'=>75000, 'La Rochelle'=>17000);
    $villeSelectionnee = $_GET["villeSelectionnee"];
    if (array_key_exists($villeSelectionnee, $tableauAssociatif)){
        $codePostalSelectionne= $tableauAssociatif[$villeSelectionnee];
        echo "Vous habitez $villeSelectionnee, le code postal est $codePostalSelectionne.";
    }
    else {
        echo "Le code postale de votre ville n'est pas enregistré.";
    }

?>