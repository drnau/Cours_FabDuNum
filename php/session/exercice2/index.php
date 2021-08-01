<?php
session_start();
if(isset($_SESSION['prenom'])) {
    echo "bonjour ".$_SESSION['prenom']; 
}
else {
    echo "Connectez-vous ! <br> <a href='identification.php'><button>Se connecter</button></a>";
}
?>