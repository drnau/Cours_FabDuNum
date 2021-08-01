<?php
    $array=array('fruits'=>array('pommes','tomates','abricots'),'animaux'=>array('chats','chiens'),'pays'=>array('Suisse', 'France', 'Angleterre'));
    foreach ($array as $key=>$value){
        echo "<h1>$key</h1>";
        foreach ($value as $valueb){
            echo "<li>$valueb</li>";
        }
    }
?>