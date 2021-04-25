<?php
    include("../connect/connect.php");
    if($_POST['u_id'] == ''){
        header("location:../setting_user.php?status=error");
    }else{
        $u_id =  filter_input(INPUT_POST , 'u_id' , FILTER_SANITIZE_NUMBER_INT);
        $u_name = filter_input(INPUT_POST , 'u_name' , FILTER_SANITIZE_STRING);
        $u_frontname = filter_input(INPUT_POST , 'u_frontname' , FILTER_SANITIZE_STRING);
        $u_lastname = filter_input(INPUT_POST , 'u_lastname' , FILTER_SANITIZE_STRING);
        $u_username = filter_input(INPUT_POST , 'u_username' , FILTER_SANITIZE_STRING);
        $u_password = filter_input(INPUT_POST , 'u_password' , FILTER_SANITIZE_STRING);
        $sql = "UPDATE user SET
        u_frontname = '$u_frontname',
        u_name = '$u_name',
        u_lastname = '$u_lastname',
        u_username = '$u_username',
        u_password = '$u_password'
        WHERE u_id = '$u_id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../setting_user.php?status=success");
        }else{
            header("location::../setting_user.php?status=error");
        }
    }

?>