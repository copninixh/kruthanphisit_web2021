<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $l_id = $_GET['id'];
        $sql = "SELECT * FROM lesson WHERE l_id ='$l_id'";
        $query = mysqli_query($conn,$sql);
        $fetch = mysqli_fetch_array($query);
        $sqldelmenu = "DELETE FROM menulesson WHERE m_lesson = '$fetch[l_lesson]' AND m_name = '$fetch[l_namelesson]'";
        $querydel1 = mysqli_query($conn,$sqldelmenu);
        if($querydel1){
            $sql2 = "DELETE FROM lesson WHERE l_id ='$l_id'";
            $result2 = mysqli_query($conn,$sql2);
        
            if($result2){
                header('location:../manage_lesson.php?status=success');
               
            }else{
                header('location:../manage_lesson.php?status=error');
            }
        }else{
            header('location:../manage_lesson.php?status=error');
        }
       
    }

?>