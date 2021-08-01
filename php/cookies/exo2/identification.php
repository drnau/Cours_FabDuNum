<form action="" method="GET">
    Prénom :<input type="text" name="prenom">
    <input type="submit">
</form>

<?php
    $prenom="";
    if(isset($_GET["prenom"])) {
        $prenom=$_GET["prenom"];
        setcookie( "monPrenom", $prenom);
        header ('Location: index.php');
    }
?>
