<?php
    $config_servername = "localhost";
    $config_username = "root";
    $config_password = "";
    $config_dbname = "webkruthanphisit";

    $conn = new mysqli($config_servername , $config_username , $config_password , $config_dbname);

    if($conn->connect_errno){
        die("Connection failed" .$conn->connect_errno);
    }

    $conn->set_charset("utf8");

?>