<?php 
session_start(); 
include("connect/connect.php");
include("function.php");
if(isset($_GET['lesson'])){
    $l_lesson = $_GET['lesson'];
    if(isset($_GET['id'])){
        $l_id = $_GET['id'];
        $sql = "SELECT * FROM lesson WHERE l_id = '$l_id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <!--start head-->
    <?php
        include_once 'component/head.php';
    ?>
    <!--end head-->

    <style>
         hr{
          color: black;
          background-color: black;
          height: 1px;
      }
      strong {
        color: #304fa0;
    }
    .bot{
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            background: #f0f4ff;
      }
      .bot-text{
            color: rgb(71, 71, 71);
            font-size: 18px;
            padding: 7px 0px 7px 10px;
            margin: 7px;
      }
      .bot-menu{
            background: white;
            border-radius: 5px;
            transition: 0.2s;
            color: rgb(71, 71, 71);

      }
      .bot-menu:hover{

            box-shadow: 0 2px 3px 0 #b3b3b3, 0 2px 6px 0 #b3b3b3;
            color: #e91e63;

      }
      .bot-selected{
            background-color: #31baf3;
            color: white;
            border-radius: 5px;
      }
      .bot-footer{
            background: white;
            border-radius: 5px;
            transition: 0.2s;
            color: rgb(71, 71, 71);

      }
      .bot-footer:hover{
            background:#ED5565;
            color: #ffffff;
      }
      .bot1{
            background: #9c27b0;
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .bot1-menu{
            transition: 0.2s;

        }
        .bot1-menu:hover{
            background: #2e333b;
        }
        .bot1-text{
            padding: 10px 0px 10px 19px;
            margin: 0;
        }
        .bot1-footer{
            transition: 0.2s;
            border-top: 2px solid white;
            border-radius: 0px 0px 5px 5px; 
        }
        .bot1-footer:hover{
            background: #ed5565;
        }
        #topbar {
          background-color:white ;
         
          min-height: 106px;
          z-index: 999999999;
          font-size: 16px;
          
          padding: 10px 5%;
          font-weight: 200;
          display: block;
          position: relative;
          top: 0px;
          width: 100%;
      }
      .navbar .navbar-nav .nav-item .nav-link {
          font-size: 15px;
      }
      .bottom-banner {
          margin: 0;
          padding: 0;
          position: relative;
          margin-top: -110px;

          background: url("assets/pic/bottombanner.png") ;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding-top: 0 !important;
          padding-bottom: 0 !important;
          max-width: 100%;
          height: 330px;
      }
      .bottom-banner2 {
          margin: 0;
          padding: 0;
          position: relative;
          margin-top: -110px;

          
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding-top: 0 !important;
          padding-bottom: 0 !important;
          max-width: 100%;
    
      }
      .bottom-banner3 {
          margin: 0;
          padding: 0;
          position: relative;
          margin-top: -40px;

          
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding-top: 0 !important;
          padding-bottom: 0 !important;
          max-width: 100%;
    
      }
    </style>

    

    <body class="bg-white s5" style="background-image: url(assets/img/test3.jpg);" >
        <!--start navbar-->
        <?php
            include_once 'component/nav2.php';
        ?>
        <!--end navbar-->
        

        <!--start banner-->
        <?php
            include_once 'component/bannerless1.php';
        ?>
        <!--end banner-->
        <div class="line-banner" style="background-image: url(assets/img/rose.jpg);height: 7px;"></div>
        
        <!--start container-->
        <div class="container" style="background-color: #282828 ">
            <br>
            <!--start lesson-->
            <div class="row">
            <?php
                include_once 'component/menulesson1.php';
            ?>
            <div class="col-xl-9 col-md-8 col-sm-12" style="background-color: #282828 ">
                <p class="d-xl-none d-lg-none">&nbsp;</p>
               
			<div class="container">
			<div class="row">
				<div class="col-xl-12 col-sm-12" style="background-color: #FFFFFF;border-radius: 15px">
                    <p>&nbsp;</p>
                    
                    
				
					<h3 class="wow fadeInDown s6 text-primary text-center"><i class="fas fa-book"></i>&nbsp;บทที่ <?php echo $row['l_lesson'] ?> <?php echo $row['l_namelesson'] ?></h3>
                    <hr style="color: #000000">
                    
              

                    <p class="text-justify"><?php echo $row['l_detail'] ?></p>
               <hr>
               <!--div class="col-xl-12" align="center">
                    <a href="index.html" class="btn btn-primary ">บทเรียนก่อนหน้า</a>
                    <a href="index.php" class="btn btn-primary "><i class="fas fa-home "></i></a>
                    <a href="index.html" class="btn btn-primary ">บทเรียนต่อไป</a>
               </div-->
               
				<p>&nbsp;</p>
				</div>    
	        </div>
			</div>
				 <p>&nbsp;</p>
		</div>	

               
            </div>
            <!--end lesson-->
            
        </div>
        <!--end container-->

        <!--start footer-->
        <?php
            include_once 'component/footer.php';
        ?>
        <!--end footer-->

        <!--start linkjs-->
        <?php
            include_once 'component/jslink.php';
        ?>
        <!--end lnikjs-->
    
    </body>
</html>