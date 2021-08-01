<?php
    function accesDisco($age) {
        switch ($age) {
            case $age<15:
                return "Désolé accès interdit";
                break;
            case $age>65:
                return "Désolé ceci n'est pas un thé dansant";
                break;
            default:
                return "Welcome";
                break;
        }
    }
    echo accesDisco(14);
?>