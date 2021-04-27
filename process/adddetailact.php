<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $d_lesson = $_POST['d_lesson'];
        $d_name = $_POST['d_name'];
        $d_detail = $_POST['d_detail'];

        $sql ="INSERT INTO `detail` (`d_id`, `d_lesson`, `d_name`, `d_detail`) 
        VALUES (NULL, '$d_lesson', '$d_name', '$d_detail');";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../adddetail.php?status=success");
        }else{
            header("location:../adddetail.php?status=error");
        }
    }

?>