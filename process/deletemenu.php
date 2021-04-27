<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $m_id = $_GET['id'];
        $sql = "DELETE FROM menulesson WHERE m_id  = '$m_id' ;";
        $result = mysqli_query($conn,$sql);

        if($result){
            header("location:../resultmenu.php?status=success");
            
        }else{
            header("location:../resultmenu.php?status=error");
        }
    }

?>