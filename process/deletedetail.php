<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $d_id = $_GET['id'];
        $sql = "DELETE FROM detail WHERE d_id ='$d_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:../manage_website.php?status=success');
          
        }else{
            header('location:../manage_website.php?status=error');
        }
    }
?>