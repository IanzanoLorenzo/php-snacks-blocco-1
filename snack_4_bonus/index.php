<?php
    $randomArr = array();
    while(count($randomArr) < 15){
        $newnum = rand(1, 99);
        if(!in_array($newnum, $randomArr)){
            $randomArr[] = $newnum;
        }
    };
    var_dump($randomArr);
?>