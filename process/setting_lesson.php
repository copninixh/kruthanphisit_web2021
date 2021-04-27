<?php

use function Aws\filter;

include("../connect/connect.php");
    if(isset($_POST['insert'])){
        $sl_lesson = filter_input(INPUT_POST , 'sl_lesson' , FILTER_SANITIZE_NUMBER_INT);
        $sl_namelesson = filter_input(INPUT_POST , 'sl_namelesson' , FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO `set_lesson` (`sl_id`, `sl_lesson`, `sl_namelesson`) 
        VALUES (NULL, '$sl_lesson', '$sl_namelesson')";
        $query = mysqli_query($conn,$sql);
        if($query){
            header("location:../setting_lesson.php?status=success");
        }else{
            header("location::../setting_lesson.php?status=error");
        }
    }

?>