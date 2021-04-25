<?php

    function readlessonurl(){
        if(isset($_GET['lesson'])){
            $lesson = $_GET['lesson'];
            include("connect/connect.php");
            $sqlles = "SELECT * FROM set_lesson ORDER BY sl_lesson ASC";
            $query = mysqli_query($conn,$sqlles);
            while($fetchles = mysqli_fetch_array($query)){
                if($lesson == $fetchles['sl_id']){
                    echo $fetchles[2];
                }
            }
          
      } 
    }

    function readmenuloop(){
      if(isset($_GET['lesson'])){
          $lesson = $_GET['lesson'];
          include("connect/connect.php");
          $sqlles = "SELECT * FROM set_lesson ORDER BY sl_lesson ASC";
          $query = mysqli_query($conn,$sqlles);
          while($fetchles = mysqli_fetch_array($query)){
              if($lesson == $fetchles['sl_id']){
                  $sqllink = "SELECT * FROM menulesson WHERE m_lesson = '$fetchles[1]'";
                  $querylink = mysqli_query($conn,$sqllink);
                  while($fetchlink = mysqli_fetch_array($querylink)){
                    echo"<a href=$fetchlink[m_link];>
                    <div class=bot-menu>
                        <h3 class='s6' style='font-size: 14px;padding: 7px 9px 7px 0px;margin: 7px;'><i class='fas fa-book'></i>&nbsp; $fetchlink[m_name]</h3>
                    </div>
                </a>";
                  }echo "<a href='./index.php'>
                  <div class=bot-menu>
                      <h3 class='s6' style='font-size: 14px;padding: 7px 9px 7px 0px;margin: 7px;'><i class='fas fa-book'></i>&nbsp; ออกห้องเรียน</h3>
                  </div>
              </a>";
              }
          }
        
      } 
    }

    function readnavbarloop(){
      if(isset($_GET['lesson'])){
        $lesson = $_GET['lesson'];
        include("connect/connect.php");
        $sqlles = "SELECT * FROM set_lesson ORDER BY sl_lesson ASC";
        $query = mysqli_query($conn,$sqlles);
        while($fetchles = mysqli_fetch_array($query)){
            if($lesson == $fetchles['sl_id']){
                $sqllink = "SELECT * FROM menulesson WHERE m_lesson = '$fetchles[1]'";
                $querylink = mysqli_query($conn,$sqllink);
                while($fetchlink = mysqli_fetch_array($querylink)){
                  echo" <a href=$fetchlink[m_link]; class=dropdown-item>
                  <i class=material-icons>layers</i> $fetchlink[m_name]
                </a>";
                }
            }
        }
      
    } 
    }

   


    

    

    function linklesson(){
      if(isset($_GET['lesson'])){
        $lesson = $_GET['lesson'];
        include("connect/connect.php");
        $sqlles = "SELECT * FROM set_lesson ORDER BY sl_lesson ASC";
        $query = mysqli_query($conn,$sqlles);
        while($fetchles = mysqli_fetch_array($query)){
            if($lesson == $fetchles['sl_id']){
                echo $fetchles[2];
            }
        }
      
  } 
    }

    function linklesson2(){
      include("connect/connect.php");
      if(isset($_GET['id'])){
        $lesson = $_GET['id'];
        $sql = "SELECT * FROM lesson WHERE l_id = '$lesson'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
      } 
    }

  

   

    
?>