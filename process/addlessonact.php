<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $l_lesson = $_POST['l_lesson'];
        $l_namelesson = $_POST['l_namelesson'];
        $l_detail = $_POST['l_detail'];

        $l_linkpdf = $_POST['l_linkpdf'];

        $lessoncheck = "SELECT * FROM lesson WHERE l_namelesson = '$l_namelesson' AND l_lesson = '$l_lesson' LIMIT 1";
        $result = mysqli_query($conn,$lessoncheck);
        $lesson = mysqli_fetch_assoc($result);

        if($lesson['l_namelesson'] === $l_namelesson && $lesson['l_lesson'] === $l_lesson){
            header('location:../addlesson.php?error=1');
            $_SESSION['l_namelessonin'] = $l_namelesson;
            $_SESSION['l_lesson'] = $l_lesson;
        }else{
            $sql ="INSERT INTO `lesson` (`l_id`, `l_lesson`, `l_namelesson`, `l_detail`,  `l_linkpdf`)
             VALUES (NULL, '$l_lesson', '$l_namelesson', '$l_detail',  '$l_linkpdf')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header('location:../addlesson.php?error=2');
                $_SESSION['l_namelessonin'] = $l_namelesson;
                
                
            }else{
               header('location:../addlesson.php?error=3');
               $_SESSION['l_namelessonin'] = $l_namelesson;
            }
        }
       
    }


?>