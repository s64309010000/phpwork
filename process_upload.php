<?php

    $folder_save = 'uploads/';
    $file_save = $folder_save.basename($_FILES['photo']['name']);
    //echo $file_save."<br>";
    $fileOK = 1;
    $fileCheckExt = strtolower(pathinfo($file_save,PATHINFO_EXTENSION));
    //echo $fileCheckExt."<br>";

    
    if(isset($_POST["submit"])){
        $check_fake = getimagesize($_FILES['photo']['tmp_name']);
        if($check_fake !== false){
            echo "ไฟล์ที่ส่งมา ".$check_fake['mime'];
        }else{
            echo "ไม่ใช่ไฟล์ภาพ";
        }
    }

    
    if (file_exists($file_save)) {
        echo "ขออภัย ไม่สามารถส่งภาพซ้ำ";
        $fileOk = 0;
    }

    if ($_FILES["photo"]["size"] > 600000) {
        echo "ขออภัย ไฟล์ขนาดใหญ่เกิน 6 MB";
        $fileOK = 0;
    }

    if($fileCheckExt != "jpg" && $fileCheckExt != "png" && $fileCheckExt != "gif" ) {
        echo "สามารถส่งได้เฉพาะนามสกุล JPG, PNG, GIF เท่านั้น";
        $fileOK = 0;
    }

    if($fileOK == 0){
        echo "ขออภัย ไฟล์ไม่สามารถส่งได้";
        echo "<meta http-equiv='refresh' content='3; url=fileUpload.html'>";
    }else{
        // $filenm = basename($_FILES['photo']['name']);
        // $enfile .= date('dmYHms');
        // $filess =  "$folder_save"."$enfile.$fileCheckExt";
        if(move_uploaded_file($_FILES['photo']['tmp_name'], $file_save)){
            echo "คุณได้ส่งไฟล์ ".htmlspecialchars(basename($_FILES['photo']['name']))." เรียบร้อยแล้ว";
            echo "<meta http-equiv='refresh' content='3; url=fileUpload.html'>";
        }else{
            echo "ขออภัย ไฟล์ไม่สามารถส่งได้";
            echo "<meta http-equiv='refresh' content='3; url=fileUpload.html'>";
        }
    }

?>