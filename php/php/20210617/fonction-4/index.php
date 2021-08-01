<?php
    function afficheJour ($jour){
        if ($jour == "lundi"){
            return "c'est lundi c'est ravioli";
        }
        else {
            return $jour;
        }
    }
    echo afficheJour("mardi"); 
?>