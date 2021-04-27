<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
        $m_lesson = $_POST['m_lesson'];
        $m_name  = $_POST['m_name'];
        $m_link = $_POST['m_link'];
        $ch = $_POST['ch'];

        if($m_link == ''){
            if($ch == '1'){
                $test = "SELECT * FROM lesson WHERE l_namelesson = '$m_name' AND l_lesson = '$m_lesson'";
                $query = mysqli_query($conn,$test);
                $row = mysqli_fetch_array($query);
        
                $url = "theme.php?lesson=$m_lesson&id=$row[l_id]";
    
                echo $ta;
        
                $sql = "INSERT INTO `menulesson` (`m_id`, `m_lesson`, `m_name`, `m_link`) 
                        VALUES (NULL, '$m_lesson', '$m_name', '$url')";
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    header("location:../addmenu.php?status=1");
                    $_SESSION['m_name'] = $m_name;
                   $_SESSION['m_lesson'] = $m_lesson;
                }else{
                    header("location:../addmenu.php?status=2");
                }
            }else if($ch == '2'){
                $test = "SELECT * FROM lesson WHERE l_namelesson = '$m_name' AND l_lesson = '$m_lesson'";
                $query = mysqli_query($conn,$test);
                $row = mysqli_fetch_array($query);
        
                $url = "test.php?lesson=$m_lesson&id=$row[l_id]";
    
                echo $ta;
        
                $sql = "INSERT INTO `menulesson` (`m_id`, `m_lesson`, `m_name`, `m_link`) 
                        VALUES (NULL, '$m_lesson', '$m_name', '$url')";
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    header("location:../addmenu.php?status=1");
                    $_SESSION['m_name'] = $m_name;
                   $_SESSION['m_lesson'] = $m_lesson;
                }else{
                    header("location:../addmenu.php?status=2");
                }
            }
           
        }else{
            $sql = "INSERT INTO `menulesson` (`m_id`, `m_lesson`, `m_name`, `m_link`) 
                    VALUES (NULL, '$m_lesson', '$m_name', '$m_link')";
            $result = mysqli_query($conn,$sql);
    
            if($result){
                header("location:../addmenu.php?status=1");
                $_SESSION['m_name'] = $m_name;
                $_SESSION['m_lesson'] = $m_lesson;
            }else{
                header("location:../addmenu.php?status=2");
            }
        }

       
    }
?>