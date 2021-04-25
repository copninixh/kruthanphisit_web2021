  <div id="topbar" class="d-none d-xl-block">
    <div class="row">
        <div class="col-xl-10">
          <a href="index.php">
            <img src="assets/pic/02.jpg" alt=""> 
            <img src="assets/pic/01.png" alt="" class="img-fluid  pt-lg-2" width="20%"> 
          </a>
        </div>
        
        <div class="col-xl-2" >
          <br>
          <?php
              if(isset($_SESSION['u_id'])){
          ?>
            <a href="admin/admin.php" class="btn btn-primary btn-round"><i class="fas fa-sign-in-alt"></i>&nbsp;<?php echo $_SESSION['u_frontname']; echo $_SESSION['u_name']; echo'&nbsp'; echo $_SESSION['u_lastname'];  ?></a>
          <?php } else{?>    
            <a href="admin/index.php" class="btn btn-primary btn-round"><i class="fas fa-sign-in-alt"></i>&nbsp;เข้าสู่ระบบ</a>
          <?php }?>
        </div>

    </div>
  </div>

  <div id="topbar" class="d-xl-none">
    <div class="row">
      <div class="col-xl-2 col-md-3 col-5" align="left">
        <img src="assets/pic/02.jpg" class="img-fluid" alt=""> 
      </div>
      
      
      <div class="col-xl-10 col-md-6 col-7 " align="center" >
        <br>
        <img src="assets/pic/01.png" alt="" class="img-fluid mt-lg-1 mt-md-3" > 
      </div>

      <div class="col-md-3 d-xs-none d-none d-xs-block mt-md-2" align="right">
          <br>
          <?php
              if(isset($_SESSION['u_id'])){
          ?>
            <a href="admin/admin.php" class="btn btn-primary btn-round"><i class="fas fa-sign-in-alt"></i>&nbsp;<?php echo $_SESSION['u_frontname']; echo $_SESSION['u_name']; echo'&nbsp'; echo $_SESSION['u_lastname'];  ?></a>
          <?php } else{?>    
            <a href="admin/index.php" class="btn btn-primary btn-round"><i class="fas fa-sign-in-alt"></i>&nbsp;เข้าสู่ระบบ</a>
          <?php }?>
        </div>


    </div>  
  </div>

<nav class="navbar bg-primary sticky-top navbar-expand-lg s6" id="sectionsNav" style="margin-bottom: unset;padding:unset;border-radius:unset;font-size:17px">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand d-xl-none" href="index.php">
              การเขียนโปรแกรมด้วยภาษาซี</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" style="justify-content: center !important;">
            <ul class="navbar-nav " style="font-size:16px">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" onclick="scrollToDownload()">
                      <i class="material-icons">home</i> หน้าหลัก
                    </a>
                  </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="material-icons">apps</i> บทเรียน
                </a>
                <div class="dropdown-menu dropdown-with-icons" style="height: auto;font-size:17px">
                <?php
                   $sqlloop = "SELECT * FROM lesson WHERE l_start = '1'";
                   $query = mysqli_query($conn,$sqlloop);
             
                   while($fetch = mysqli_fetch_array($query)){
                      $sqlles = "SELECT * FROM menulesson WHERE m_lesson ='$fetch[l_lesson]' AND m_name = '$fetch[l_namelesson]'";
                      $queryles = mysqli_query($conn,$sqlles);
                      $fetchles = mysqli_fetch_array($queryles);
             


                  ?>
                  <a href="<?php echo $fetchles['m_link']; ?>" class="dropdown-item">
                    <i class="material-icons">layers</i>บทที่ <?php echo $fetch['l_lesson']; ?> <?php echo $fetch['l_namelesson']; ?>
                  </a>
                 

                  <?php } ?>
                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="theme2.php?id=แผนผังไซต์">
                  <i class="material-icons">unarchive</i> แผนผังไซต์
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="theme2.php?id=ครูผู้สอน">
                  <i class="material-icons">face</i>ครูผู้สอน
                </a>
              </li>
            </ul>
          </div>
        </div>
</nav>