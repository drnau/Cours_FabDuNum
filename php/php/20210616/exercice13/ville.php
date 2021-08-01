<ul>
<?php
    $villeCode=array('Poitiers'=>86000, 'Paris'=>75000, 'La Rochelle'=>17000);
    foreach ($villeCode as $ville => $code) {
        echo "<li>$ville : $code</li>";
    }
?>
</ul>