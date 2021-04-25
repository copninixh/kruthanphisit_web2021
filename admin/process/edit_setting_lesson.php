<?php
    include("../connect/connect.php");
    if($_POST['sl_id'] == ''){
        header("location:../setting_lesson.php?status=error");
    }else{
        $sl_id =  filter_input(INPUT_POST , 'sl_id' , FILTER_SANITIZE_NUMBER_INT);
        $sl_lesson = filter_input(INPUT_POST , 'sl_lesson' , FILTER_SANITIZE_NUMBER_INT);
        $sl_namelesson = filter_input(INPUT_POST , 'sl_namelesson' , FILTER_SANITIZE_STRING);

        $sql = "UPDATE set_lesson SET
        sl_lesson = '$sl_lesson',
        sl_namelesson = '$sl_namelesson'
        WHERE sl_id = '$sl_id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../setting_lesson.php?status=success");
        }else{
            header("location:../setting_lesson.php?status=error");
        }
    }

?>