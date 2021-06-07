<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['n_id'] == ''){
        header("location:../manage_news.php?status=error");
    }else{
        $n_id = filter_input(INPUT_POST , 'n_id' , FILTER_SANITIZE_STRING);
        $n_name = filter_input(INPUT_POST , 'n_name' , FILTER_SANITIZE_STRING);
        $n_detail = $_POST['n_detail'];
        $n_date = filter_input(INPUT_POST , 'n_date' , FILTER_SANITIZE_NUMBER_INT);
        $n_month = filter_input(INPUT_POST , 'n_month' , FILTER_SANITIZE_NUMBER_INT);
        $n_year = filter_input(INPUT_POST , 'n_year' , FILTER_SANITIZE_NUMBER_INT);
        $n_ref = filter_input(INPUT_POST , 'n_ref' , FILTER_SANITIZE_STRING);

        $sql = "UPDATE news SET
        n_name = '$n_name',
        n_detail = '$n_detail',
        n_date = '$n_date',
        n_month = '$n_month',
        n_year = '$n_year',
        n_ref = '$n_ref'
        WHERE n_id = '$n_id'";
        $query = mysqli_query($conn , $sql);
        if($query){
            header("location:../manage_news.php?status=success");
        }else{
            header("location:../manage_news.php?status=error");
        }
        
    }


?>