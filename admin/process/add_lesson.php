<?php
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $l_lesson = filter_input(INPUT_POST , 'l_lesson' ,FILTER_SANITIZE_NUMBER_INT);
        $l_namelesson = filter_input(INPUT_POST , 'l_namelesson' , FILTER_SANITIZE_STRING);
        $l_detail = $_POST['l_detail'];
        $l_type = filter_input(INPUT_POST , 'l_type' ,FILTER_SANITIZE_NUMBER_INT);
        $l_start = filter_input(INPUT_POST , 'l_start' ,FILTER_SANITIZE_NUMBER_INT);
        $l_linkpdf = $_POST['l_linkpdf'];
        $lessoncheck = "SELECT * FROM lesson WHERE l_namelesson = '$l_namelesson' AND l_lesson = '$l_lesson' LIMIT 1";
        $result = mysqli_query($conn,$lessoncheck);
        $lesson = mysqli_fetch_assoc($result);

        if($lesson['l_namelesson'] === $l_namelesson && $lesson['l_lesson'] === $l_lesson){
            header('location:../addlesson.php?error=1');
            $_SESSION['l_namelessonin'] = $l_namelesson;
            $_SESSION['l_lesson'] = $l_lesson;
        }else{
            $sql22 ="INSERT INTO `lesson` (`l_id`, `l_lesson`, `l_namelesson`, `l_detail`,  `l_linkpdf`,  `l_start`,  `l_type`)
             VALUES (NULL, '$l_lesson', '$l_namelesson', '$l_detail',  '$l_linkpdf',  '$l_start',  '$l_type')";
            $result22 = mysqli_query($conn,$sql22);
            if($result22){
                if($l_type == '1'){
                    $test = "SELECT * FROM lesson WHERE l_namelesson = '$l_namelesson' AND l_lesson = '$l_lesson'";
                    $query = mysqli_query($conn,$test);
                    $row = mysqli_fetch_array($query);
            
                    $url = "theme.php?lesson=$l_lesson&id=$row[l_id]";
        
                    echo $ta;
            
                    $sql = "INSERT INTO `menulesson` (`m_id`, `m_lesson`, `m_name`, `m_link`, `m_idlesson`) 
                            VALUES (NULL, '$l_lesson', '$l_namelesson', '$url' , '$row[l_id]')";
                    $result = mysqli_query($conn,$sql);
                    
                    if($result){
                        header("location:../add_lesson.php?status=success");
                     
                       
                    }else{
                        header("location:../add_lesson.php?status=error");
                    }

                }else if($l_type == '2'){
                    $test = "SELECT * FROM lesson WHERE l_namelesson = '$l_namelesson' AND l_lesson = '$l_lesson'";
                    $query = mysqli_query($conn,$test);
                    $row = mysqli_fetch_array($query);
            
                    $url = "test.php?lesson=$l_lesson&id=$row[l_id]";
        
                    echo $ta;
            
                    $sql = "INSERT INTO `menulesson` (`m_id`, `m_lesson`, `m_name`, `m_link`, `m_idlesson`) 
                        VALUES (NULL, '$l_lesson', '$l_namelesson', '$url' , '$row[l_id]')";
                    $result = mysqli_query($conn,$sql);
                    
                    if($result){
                        header("location:../add_lesson.php?status=success");
                    }else{
                        header("location:../add_lesson.php?status=error");
                    }
                }

                
                
                
            }else{
               header('location:../addlesson.php?status=error');
               $_SESSION['l_namelessonin'] = $l_namelesson;
            }
        }
       
    }


?>