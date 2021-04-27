<?php
    include("../connect/connect.php");
    if($_POST["l_id"] == ''){
        header('location:../admin.php?status=error');
    }
    $l_id = $_POST['l_id'];
    $l_lesson = $_POST['l_lesson'];
    $l_namelesson = $_POST['l_namelesson'];
    $l_detail = $_POST['l_detail'];
    $l_start = $_POST['l_start'];
    $l_linkpdf = $_POST['l_linkpdf'];
    $l_type = $_POST['l_type'];

    $sql ="UPDATE lesson SET 
    l_lesson = '$l_lesson',
    l_namelesson = '$l_namelesson',
    l_detail = ' $l_detail',
    l_start = ' $l_start',
    l_type = ' $l_type',
    l_linkpdf = '$l_linkpdf'
    WHERE l_id = '$l_id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        if($l_type == '1'){
            $url = "theme.php?lesson=$l_lesson&id=$l_id";
            $sqledit = "UPDATE menulesson SET
            m_lesson = '$l_lesson',
            m_name = '$l_namelesson',
            m_link = '$url'
            WHERE m_idlesson = '$l_id'
            ";
            $query = mysqli_query($conn,$sqledit);
            if($query){
                header('location:../manage_lesson.php?status=success');
            }else{
                header('location:../manage_lesson.php?status=error');
            }
        }else if($l_type == '2'){
            $url = "test.php?lesson=$l_lesson&id=$l_id";
            $sqledit = "UPDATE menulesson SET
            m_lesson = '$l_lesson',
            m_name = '$l_namelesson',
            m_link = '$url'
            WHERE m_idlesson = '$l_id'
            ";
            $query = mysqli_query($conn,$sqledit);
            if($query){
                header('location:../manage_lesson.php?status=success');
            }else{
                header('location:../manage_lesson.php?status=error');
            }
        }else{
            $url = "theme.php?lesson=$l_lesson&id=$l_id";
            $sqledit = "UPDATE menulesson SET
            m_lesson = '$l_lesson',
            m_name = '$l_namelesson',
            m_link = '$url'
            WHERE m_idlesson = '$l_id'
            ";
            $query = mysqli_query($conn,$sqledit);
            if($query){
                header('location:../manage_lesson.php?status=success');
            }else{
                header('location:../manage_lesson.php?status=error');
            }
        }
        
        
    }else{
        header('location:../manage_lesson.php?status=error');
    }

?>