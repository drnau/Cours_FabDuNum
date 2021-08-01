<?php
    function calculAir($longueur, $largeur){
        $calculAir=$longueur*$largeur;
        return "L'air du rectangle de longueur ".$longueur.' cm et de largeur '.$largeur.' cm vaut '.$calculAir.' cm².';
    }
    if (isset($_GET["longueur"]) && isset($_GET["largeur"])){
        $longueur=$_GET["longueur"];
        $largeur=$_GET["largeur"];
        $message= calculAir($longueur,$largeur);    
    }  
?>
<form action="" methode="get">
    Largeur :<input type="number" name="largeur" value="2">
    Longueur :<input type="number" name="longueur" value="2">
    <input type="submit">
</form>

<?php
    if (isset($message)){
        echo $message;
    }
?>