<?php
if(isset($_COOKIE["monId"])) {
    $array=explode(",", $_COOKIE["monId"]);
    echo "Bonjour ".$array[0]." ".$array[1].", tu habites à ".$array[2]; 
}
else {
    echo "Connectez-vous ! <br> <a href='identification.php'><button>Se connecter</button></a>";
}
?>