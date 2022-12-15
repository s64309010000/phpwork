<?php

    //Host Name / IP Address Host MySQL server
    $server = "localhost";
    //User MySQL Server
    $user = "root";
    //Password User
    $pass = "";
    //Database Name
    $db = "student";

    $conn = mysqli_connect($server, $user, $pass, $db);

    if(!$conn){
        echo "ไม่สามารถติดต่อ MySQL Server ได้";
        //header("refresh: 2; url=/download");
    }
    
?>