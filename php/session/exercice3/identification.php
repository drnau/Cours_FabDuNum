<?php
    $login="";
    $pwd="";
    if((isset($_GET['login'])&&$_GET["login"] == 'admin')&& ($_GET["pwd"] == 'admin')) {
        $login=$_GET["login"];
        $nom=$_GET["pwd"];
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['pwd'] = $pwd;
        echo "$login $pwd";
        header ('Location: index.php');
    }
?>

<form action="" method="GET">
    Login :<input type="text" name="login" ><br>
    Password :<input type="password" name="pwd"><br>
    <input type="submit">
</form>

