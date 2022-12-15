<?php

    $file_1 = fopen("text.txt","r") or die('ไม่พบไฟล์ที่จะเปิด');

    echo fread($file_1,filesize("test.txt"));

    fclose($file_1);

?>