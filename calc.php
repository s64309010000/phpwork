<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sign = $_POST['op'];

    if($num2 == 0 && $sign == '/' ){
        echo "<h2 style='color: red;'>ห้ามกรอกเลข 0 ในช่อง Number 2</h2>";
        echo "<meta http-equiv='refresh' content='3; url=calc.html'>";
    }else{
        switch ($sign) {
            case '+':
                function addNumber($num1,$num2){
                    echo $num1 + $num2;
                }
                addNumber($num1,$num2);
                break;
             case '-':
                function minusNumber($num1,$num2){
                    echo $num1 - $num2;
                }
                minusNumber($num1,$num2);
                break;
             case 'x':
                function multiNumber($num1,$num2){
                    echo $num1 * $num2;
                }
                multiNumber($num1,$num2);
                break;
            
            default:
                function diviNumber($num1,$num2){
                    echo $num1 / $num2;
                }
                diviNumber($num1,$num2);
                break;
        }
    }

?>