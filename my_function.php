<?php

    function addNumber(){
        echo "TEST";
    }

    echo "Teera Binkasem";
    echo "<br>";
    addNumber();
    echo "<hr color='red'>";

    function multipleNumber($num1){
        $multiple  = 1;
        echo "<h3>สูตรคูณ แม่ ".$num1."</h3>";
        while($multiple <= 12){
            echo "<span style='border: 1px dotted green;color:red;'>";
            echo $num1." x ".$multiple." = ".$multiple * $num1;
            echo "</span>";
            echo "<br>";
            $multiple++;
        }
    }
    multipleNumber(10);
    echo "<hr color='green'>";
    //       *
    //      * *
    //     * * *
    //    * * * *
    //   * * * * * 

    function pyramidModel($n){

        $size = $n;

        for($w = 1; $w <= $size; $w++){             
            for($a = 1;$a <= $size - $w ;$a++){
                echo "&nbsp;&nbsp;";
            }
                for($b = 1;$b <= $w;$b++){
                    echo "*&nbsp;&nbsp;";
                }
            echo "<br>";
        }
    }
    pyramidModel(5);
    

?>