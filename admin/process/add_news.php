<?php 
    session_start();
    include("../connect/connect.php");

    if(isset($_POST['add_news'])){
        $n_name = filter_input(INPUT_POST , 'n_name' , FILTER_SANITIZE_STRING);
        $n_detail = $_POST['n_detail'];
        $n_date = filter_input(INPUT_POST , 'n_date' , FILTER_SANITIZE_NUMBER_INT);
        $n_month = filter_input(INPUT_POST , 'n_month' , FILTER_SANITIZE_NUMBER_INT);
        $n_year = filter_input(INPUT_POST , 'n_year' , FILTER_SANITIZE_NUMBER_INT);
        $n_ref = filter_input(INPUT_POST , 'n_ref' , FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO `news` (`n_id`, `n_name`, `n_date`, `n_month`, `n_year`, `n_detail`, `n_ref`) 
        VALUES (NULL, '$n_name', '$n_date', '$n_month', '$n_year', '$n_detail', '$n_ref');";
        $query = mysqli_query($conn , $sql);
        if($query){
            header("location:../manage_news.php?status=success");
        }else{
            header("location:../manage_news.php?status=error");
        }
        
    }

?>