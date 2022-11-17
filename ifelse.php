<?php

    $num = 9;

    if($num % 2 == 0){
        echo "เลขคู่";
    }

    echo "<hr color='red'>";

    if($num % 2 == 0){
        echo "เลขคู่";
    }else{
        echo "เลขคี่";
    }

    echo "<hr color='red'>";

    $led = "red";

    if($led == 'red'){
        echo "ไฟแดง";
    }elseif($led == 'green'){
        echo "ไฟเขียว";
    }else{
        echo "ไฟเหลือง";
    }

?>