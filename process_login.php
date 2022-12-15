<?php

    include "configDB.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $com_sql = "SELECT * FROM account_user WHERE user_acc = '$username' and pass_acc = '$password'";
    //echo $com_sql;
    $com_query = mysqli_query($conn, $com_sql);
    $com_result = mysqli_fetch_array($com_query);

    if(!$com_result){
        echo "ไม่สามารถเข้าสู่ระบบได้ เนื่องจาก Username หรือ Password ไม่ถูกต้อง";
        header("refresh: 2; url=login.html");
    }else{
        echo "รอสักครู่...";
        header("refresh: 2; url=user.php");
    }

?>