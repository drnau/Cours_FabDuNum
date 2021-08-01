<?php
    $ligne=0;
    for ($ligne=0; $ligne<10; $ligne++){
        $colonne=0;
        if ($ligne%2) {
            for ($colonne=0; $colonne<10; $colonne++){
                echo ("<i style='color:green'> *  </i> ");
            }
        }
        else {
            for ($colonne=0; $colonne<10; $colonne++){
                echo ("<i style='color:red'> *  </i> ");
            }        
        }
        echo ("<br>");
    }
?>