<?php
if(isset($_COOKIE["monPrenom"])) {
    echo "bonjour ".$_COOKIE['monPrenom']; 
}
else {
    echo "Connectez-vous ! <br> <a href='identification.php'><button>Se connecter</button></a>";
}
?>