<?php
session_start();
if(isset($_SESSION['login'])&&isset($_SESSION['pwd'])) {
    echo "<a href='deco.php'><button>Se déconnecter</button></a><br>" ;
    echo "Actualité .....";
}
else {
    echo "<a href='identification.php'><button>Se connecter</button></a>";
}
?>