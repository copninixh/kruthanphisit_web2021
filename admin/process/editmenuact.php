<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['m_id'] == ''){
        header("location:../manage_menu.php?status=error");
    }
    $m_id = $_POST['m_id'];
    $m_lesson = $_POST['m_lesson'];
    $m_name = $_POST['m_name'];
    $m_link = $_POST['m_link'];
    $ch = $_POST['ch'];

    
 
        if($ch == '1'){
            $sqlse ="SELECT * FROM lesson WHERE l_namelesson = '$m_name' AND l_lesson = '$m_lesson'";
            $query = mysqli_query($conn,$sqlse);
            $fetch = mysqli_fetch_array($query);
            $url = "theme.php?lesson=$m_lesson&id=$fetch[l_id]";
            $sql = "UPDATE menulesson SET
            m_lesson = '$m_lesson',
            m_name = '$m_name',
            m_link = '$url'
            WHERE m_id = '$m_id'";
            $result = mysqli_query($conn,$sql);
            
            if($result){
                header("location:../manage_menu.php?status=success");
        
            }else{
                header("location:../manage_menu.php?status=error");
            }
        }else if($ch == '2'){
            $sqlse ="SELECT * FROM lesson WHERE l_namelesson = '$m_name' AND l_lesson = '$m_lesson'";
            $query = mysqli_query($conn,$sqlse);
            $fetch = mysqli_fetch_array($query);
            $url = "test.php?lesson=$m_lesson&id=$fetch[l_id]";
            $sql = "UPDATE menulesson SET
            m_lesson = '$m_lesson',
            m_name = '$m_name',
            m_link = '$url'
            WHERE m_id = '$m_id'";
            $result = mysqli_query($conn,$sql);
            
            if($result){
                header("location:../manage_menu.php?status=success");
                
            }else{
                header("location:../manage_menu.php?status=error");
            }
        }else{
        $sql = "UPDATE menulesson SET
        m_lesson = '$m_lesson',
        m_name = '$m_name',
        m_link = '$m_link'
        WHERE m_id = '$m_id'";
        $result = mysqli_query($conn,$sql);
        
        if($result){
            header("location:../manage_menu.php?status=success");
      
        }else{
            header("location:../manage_menu.php?status=error");
        }
    }
    



    
?>