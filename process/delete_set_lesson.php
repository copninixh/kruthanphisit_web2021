<?php
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $sl_id = filter_input(INPUT_GET , 'id' , FILTER_SANITIZE_NUMBER_INT);
        $sql = "DELETE FROM set_lesson WHERE sl_id ='$sl_id'";
        $result = mysqli_query($conn,$sql);
    
        if($result){
            
            header('location:../setting_lesson.php?status=success');
           
        }else{
            header('location:../setting_lesson.php?status=error');
        }
    }

?>