<?php
    session_start();
    include("../connect/connect.php");
    if($_POST["d_id"] == ''){
        header('location:../manage_website.php?status=error');
    }
    if(isset($_POST['submit'])){
        $d_id = $_POST['d_id'];
        $d_lesson = $_POST['d_lesson'];
        $d_name = $_POST['d_name'];
        $d_detail = $_POST['d_detail'];
        $sql = "UPDATE detail SET 
        d_lesson = '$d_lesson',
        d_name = '$d_name',
        d_detail = ' $d_detail'
        WHERE d_id = '$d_id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:../manage_website.php?status=success');
          
        }else{
            header('location:../manage_website.php?status=error');
        }
    }


?>