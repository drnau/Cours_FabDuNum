<ul>
<?php
    $i=0;
    $villeCode=array('Poitiers'=>86000, 'Paris'=>75000, 'La Rochelle'=>17000);
    foreach ($villeCode as $ville => $code) {
        $i++;
        if ($i%2) {
            echo "<li><i style='color:green'> $ville : $code  </i></li>";
            
        }
        else {
            echo "<li><i style='color:blue'> $ville : $code  </i></li> ";
        }
    }
?>
</ul>


