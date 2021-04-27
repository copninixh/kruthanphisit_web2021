<?php
    include("../connect/connect.php");
    if(isset($_POST['insert'])){
        $u_name = filter_input(INPUT_POST , 'u_name' , FILTER_SANITIZE_NUMBER_INT);
        $u_frontname = filter_input(INPUT_POST , 'u_frontname' , FILTER_SANITIZE_STRING);
        $u_lastname = filter_input(INPUT_POST , 'u_lastname' , FILTER_SANITIZE_STRING);
        $u_username = filter_input(INPUT_POST , 'u_username' , FILTER_SANITIZE_STRING);
        $u_password = filter_input(INPUT_POST , 'u_password' , FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO `user` (`u_id`, `u_frontname`, `u_name`, `u_lastname`, `u_username`, `u_password`, `u_status`, `u_pic`) 
        VALUES (NULL, '$u_frontname', '$u_name', '$u_lastname', '$u_username', '$u_password', 'A', '')";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../setting_user.php?status=success");
        }else{
            header("location::../setting_user.php?status=error");
        }
    }

?>