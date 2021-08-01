
<form action="" method="get">
Nom :<input type="text" name="nom"><br>
Prénom :<input type="text" name="prenom"><br>
<input type="submit" value="ok">
</form>

<?php
    $prenom=$_GET["prenom"];
    $nom=$_GET["nom"];

    if ($prenom == ""){
        echo "Veuillez remplir tout les champs ";
    }
    else if ($nom == ""){
        echo "Veuillez remplir tout les champs ";
    }
    else {
        echo "Merci $nom $prenom";
    }      
?>