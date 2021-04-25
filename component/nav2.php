  <div id="topbar" class="d-none d-xl-block">
    <div class="row">
        <div class="col-xl-1">
          <a href="index.php">
            <img src="assets/pic/02.jpg" alt="">
          </a>
        </div>

        <div class="col-xl-9" align="left">
            <h3 class="s6 pt-3 ml-5"><?php readlessonurl() ?></h3>
        </div>

        <div class="col-xl-2" >
          <br>
          <a href="index.php" class="btn btn-primary btn-round s6" style="font-size: 15px"><i class="fas fa-sign-in-alt"></i>&nbsp;ออกห้องเรียน</a>
        </div>

    </div>
  </div>

  <div id="topbar" class="d-xl-none">
    <div class="row">
      <div class="col-xl-2 col-5">
        <img src="assets/pic/02.jpg" class="img-fluid" alt=""> 
      </div>
      
      <div class="col-xl-10 col-7 text-left" align="left">
        <br>
        <img src="assets/pic/01.png" alt="" class="img-fluid mt-md-3" > 
      </div>

    </div>  
  </div>

<nav class="navbar bg-primary sticky-top navbar-expand-lg s6" id="sectionsNav" style="margin-bottom: unset;padding:unset;border-radius:unset;font-size:16px">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand d-xl-none" href="index.php">
              <?php readlessonurl(); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" style="justify-content: center !important;">
            <ul class="navbar-nav " style="font-size:16px">
               
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="material-icons">apps</i> บทเรียน
                </a>
                <div class="dropdown-menu dropdown-with-icons" style="height: auto;">
                <?php readnavbarloop() ?>
                  
                </div>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="index.php" onclick="scrollToDownload()">
                      <i class="material-icons">home</i> หน้าหลัก
                    </a>
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