<?php
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $u_id = filter_input(INPUT_GET , 'id' , FILTER_SANITIZE_NUMBER_INT);
        $sql = "DELETE FROM user WHERE u_id ='$u_id'";
        $result = mysqli_query($conn,$sql);
        if($result){ 
            header('location:../setting_user.php?status=success');
        }else{
            header('location:../setting_user.php?status=error');
        }
    }

?>