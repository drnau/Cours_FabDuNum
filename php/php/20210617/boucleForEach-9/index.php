<?php
    $j=1;
    $key=["a"=>"prems", "b"=>"deux", "c"=>"trois"];
    $values=['f1val'=>"veau", 'f2val'=>"vache", 'f3val'=>"cochon"];
    $final=[];
    foreach ($key as $keya =>$nombre){
        $final[$nombre] = $values['f'.$j.'val'];
        $j++;
    }
    print_r($final);    
?>