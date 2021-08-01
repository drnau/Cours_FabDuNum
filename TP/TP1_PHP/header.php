<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$titre" ?></title>
</head>
<style>
    .active {
        color = red;
    }
</style>
<header>
    <a href="index.php" class="<?php if ($titre='Accueil'){echo 'active';}?>">Accueil </a>
    <a href="cv.php" class="<?php if ($titre='CV'){echo 'active';}?>">CV</a>
    <a href="contact.php" class="<?php if ($titre='Contact'){echo 'active';}?>">Contact</a>
</header>

