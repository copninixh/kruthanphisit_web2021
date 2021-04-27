<!-- begin #header -->
<div id="header" class="header navbar-inverse">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="admin.php" class="navbar-brand">
            ระบบบริหารจัดการเว็บไซต์
        </a>
    </div>
    <!-- end navbar-header -->

    <!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">

        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span
                    class="d-none d-md-inline"><?php echo $_SESSION['u_frontname']; echo $_SESSION['u_name']; echo'&nbsp;'; echo $_SESSION["u_lastname"]; ?></span>
                <div class="image text-grey-darker " style="justify-content: unset;overflow: unset;">
                    <?php echo $_SESSION["u_pic"]; ?>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="process/logout.php" class="dropdown-item">ออกจากระบบ</a>
            </div>
        </li>
    </ul>
    <!-- end header navigation right -->

    <div class="search-form">
        <button class="search-btn" type="submit"><i class="material-icons">search</i></button>
        <input type="text" class="form-control" placeholder="Search Something..." />
        <a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
    </div>
</div>
<!-- end #header -->