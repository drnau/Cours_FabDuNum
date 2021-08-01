<?php
    $colonne=0;
    for ($colonne=0; $colonne<10; $colonne++){
        $ligne=0;
        if ($colonne%2) {
            for ($ligne=0; $ligne<$colonne; $ligne++){
                echo ("<i style='color:green'> *  </i> ");
            }
        }
        else {
            for ($ligne=0; $ligne<$colonne; $ligne++){
                echo ("<i style='color:red'> *  </i> ");
            }        
        }
        echo ("<br>");
    }
?>