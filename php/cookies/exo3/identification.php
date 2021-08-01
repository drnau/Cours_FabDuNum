<form action="" method="GET">
    Prénom :<input type="text" name="prenom">
    Nom :<input type="text" name="nom">
    Ville :<input type="text" name="ville">
    <input type="submit">
</form>

<?php
    $prenom="";
    $nom="";
    $ville="";
    if(isset($_GET["prenom"])&&isset($_GET["nom"])&&isset($_GET["ville"])) {
        $prenom=$_GET["prenom"];
        $nom=$_GET["nom"];
        $ville=$_GET["ville"];
        $array=[$nom, $prenom, $ville];
        setcookie( "monId", implode(",", $array));
        header ('Location: index.php');
    }
?>