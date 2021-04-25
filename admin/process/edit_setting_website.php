<?php
    include("../connect/connect.php");
    if($_POST['s_id'] == ''){
        header("location:../setting_website.php?status=error");
    }else{
        $s_id =  filter_input(INPUT_POST , 's_id' , FILTER_SANITIZE_NUMBER_INT);
        $s_protocal = $_POST['s_protocal'];
        $s_pathurl = $_POST['s_pathurl'];
 
        $sql = "UPDATE setting SET
        s_protocal = '$s_protocal',
        s_pathurl = '$s_pathurl'
        WHERE s_id = '$s_id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../setting_website.php?status=success");
        }else{
            header("location::../setting_website.php?status=error");
        }
    }

?>