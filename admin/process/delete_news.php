<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $n_id = $_GET['id'];
        $sql = "DELETE FROM news WHERE n_id ='$n_id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../manage_news.php?status=success");
        }else{
            header("location:../manage_news.php?status=error");
        }
    }
?>