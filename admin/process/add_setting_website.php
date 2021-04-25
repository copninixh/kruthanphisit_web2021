<?php
    include("../connect/connect.php");
    if(isset($_POST['insert'])){
       $s_protocal = $_POST['s_protocal'];
       $s_pathurl = $_POST['s_pathurl'];

        $sql = "INSERT INTO `setting` (`s_id`, `s_protocal`, `s_pathurl`) 
        VALUES (NULL, '$s_protocal', '$s_pathurl');";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../setting_website.php?status=success");
        }else{
            header("location::../setting_website.php?status=error");
        }
    }

?>