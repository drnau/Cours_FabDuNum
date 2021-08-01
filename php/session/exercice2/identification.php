<?php
    $prenom="";
    if(isset($_GET["prenom"])) {
        $prenom=$_GET["prenom"];
        session_start();
        $_SESSION['prenom']=$prenom;
        header ('Location: index.php');
    }
?>

<form action="" method="GET">
    Prénom :<input type="text" name="prenom">
    <input type="submit">
</form>

