<?php
if(isset($_COOKIE["monId"])) {
    $array=explode(",", $_COOKIE["monId"]);
    echo "Bonjour ".$array[0]." ".$array[1].", tu habites à ".$array[2];
    echo "<br> <a href='deco.php'><button>Se déconnecter</button></a>" ;
}
else {
    echo "<a href='identification.php'><button>Se connecter</button></a>";
}
?>