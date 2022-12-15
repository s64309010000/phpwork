<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $num6 = $_POST['num6'];
    $pro = $_POST['pro'];

    $test = array(
        $num1,
        $num2,
        $num3,
        $num4,
        $num5,
        $num6
    );

    echo "<table>";

    switch ($pro) {
        case 'นับจำนวนข้อมูล':
            echo "จำนวนข้อมูล ".count($test)."&nbsp;รายการ<br>";
            break;
        
        default:
            foreach($test as $t){
                echo "<tr><td style='border: 1px solid red'>".$t."</tr></td>";
            }
            break;
    }

    echo "</table>";

?>