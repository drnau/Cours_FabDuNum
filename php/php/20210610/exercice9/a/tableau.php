<?php
$tableauAssociatif = array ('Poitiers'=>86000,'Paris'=>75000, 'La Rochelle'=>17000);
print_r($tableauAssociatif);
$ville="Nice";
if (array_key_exists($ville,$tableauAssociatif)){
    echo "La ville de $ville est présente dans le tableau";
}
else {
    echo "La ville de $ville n'est pas présente dans le tableau";
}
