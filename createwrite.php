<?php

    $str1 = "This is a book.\n";
    $str2 = "This is a Cat.\n";
    $str3 = "This is a Bat.\n";

    $file_create1 = fopen("teera.txt","w") or die('สร้างไฟล์ไม่ได้');
    fwrite($file_create1,$str1);
    $file_open = fopen("teera.txt","r") or die('อ่านไฟล์ไม่ได้');
    echo fread($file_open,filesize("teera.txt"));
    echo "<br>";
    fclose($file_create1);

    $file_create2 = fopen("teera.txt","w") or die('สร้างไฟล์ไม่ได้');
    fwrite($file_create2,$str2);
    $file_open = fopen("teera.txt","r") or die('อ่านไฟล์ไม่ได้');
    echo fread($file_open,filesize("teera.txt"));
    echo "<br>";
    fclose($file_create2);

    $file_create3 = fopen("teera.txt","w") or die('สร้างไฟล์ไม่ได้');
    fwrite($file_create3,$str3);
    $file_open = fopen("teera.txt","r") or die('อ่านไฟล์ไม่ได้');
    echo fread($file_open,filesize("teera.txt"));
    echo "<br>";
    fclose($file_create3);

?>