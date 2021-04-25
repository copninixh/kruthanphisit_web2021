<nav class="navbar navbar-default fixed-top navbar-expand-lg s1 wow fadeInDown"  id="sectionsNav"  >
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php" style="font-size:17px;color:#06a2df">
        <?php readlessonurl() ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fas fa-book-open"></i>&nbsp; เนื้อหาภายในบทเรียน
            </a>
            <div class="dropdown-menu dropdown-with-icons">
            <?php readnavbarloop() ?>
             
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php" onclick="scrollToDownload()">
              <i class="material-icons">home</i> ออกห้องเรียน
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="fas fa-sitemap"></i>&nbsp; แผนผังไซต์
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
            <i class="fas fa-chalkboard-teacher"></i>&nbsp; ครูผู้สอน
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>