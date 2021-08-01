<?php
    $boisson=$_GET["boisson"];
    $sucre=$_GET["sucre"];
    function servirCafe($boisson, $sucre){
        return "Vous avez choisi un $boisson $sucre sucre.";
    }
    echo servirCafe($boisson, $sucre);

?>
