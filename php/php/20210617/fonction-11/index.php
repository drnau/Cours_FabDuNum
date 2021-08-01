<?php
    function servirCafe($type='cappucino', $sucre='sans'){
        return "Servir un $type $sucre sucre.";
    }
    echo servirCafe();
    echo servirCafe("espresso", "avec")    
?>
