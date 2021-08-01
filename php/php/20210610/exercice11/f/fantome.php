<?php
    $max=10;
    for ($creationFantome=0; $creationFantome < $max; $creationFantome++){
        echo "création du fantôme n°$creationFantome";
        if ($creationFantome == $max) {
            echo ".";
        }
        else {
            echo ", ";
        }
    }
?>