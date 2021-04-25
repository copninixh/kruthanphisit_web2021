<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
            $u_username = $_POST['u_username'];
            $u_password = mysqli_real_escape_string($conn , $_POST['u_password']);
            $sql = "SELECT * FROM `user` WHERE `u_username` = '".$u_username."' AND `u_password` = '".$u_password."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            if($row >0){
                $_SESSION["u_id"] = $row["u_id"] ;
                $_SESSION["u_frontname"] = $row["u_frontname"] ;
                $_SESSION["u_name"] = $row["u_name"] ;
                $_SESSION["u_lastname"] = $row["u_lastname"];
                $_SESSION["u_pic"] = $row["u_pic"];
                $_SESSION["time_login"] = time();
                header('Location: ../admin.php');
            }else{
                header('Location: ../index.php?status=error');
            }
    }
?>
