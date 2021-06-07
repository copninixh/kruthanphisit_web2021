<!-- begin #sidebar -->
	<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav" >
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover" style="background: url(https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX23310792.jpg);background-size:100%;opacity: 0.6;"></div>
							<div class="image  bg-black text-grey-darker" style="width: 150px;height: 150px;border-radius: 150px;">
								<?php echo $_SESSION["u_pic"]; ?>
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								<?php echo $_SESSION['u_frontname']; echo $_SESSION['u_name']; echo'&nbsp;'; echo $_SESSION["u_lastname"]; ?>
								<small>สถานะ : ผู้ดูแลระบบ</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="process/logout.php"><i class="fas fa-sign-out-alt" style="font-size: 17px"></i>ออกจากระบบ</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">:: เมนูการใช้งาน ::</li>
					<li class="active">
						<a href="admin.php">
							<i class="fas fa-home" style="font-size: 17px"></i>
							<span>หน้าหลัก</span>
						</a>
					</li>
					<li class="has-sub ">
						<a href="manage_lesson.php">
						<i class="fas fa-graduation-cap" style="font-size: 17px"></i>
							<span>บริหารจัดการเนื้อหาบทเรียน</span>
						</a>
					</li>
					<li class="has-sub ">
						<a href="manage_menu.php">
						<i class="fas fa-chalkboard" style="font-size: 17px"></i>
							<span>บริหารจัดการเมนูบทเรียน</span>
						</a>
					</li>
					<li class="has-sub">
				
						<a href="manage_website.php">
							<i class="fas fa-indent" style="font-size: 17px"></i>
							<span>บริหารจัดการหน้าหลักเว็บไซต์</span>
						</a>
					</li>
					<li class="has-sub">
				
						<a href="manage_news.php">
							<i class="fas fa-indent" style="font-size: 17px"></i>
							<span>จัดการข่าวประชาสัมพันธ์</span>
						</a>
					</li>

					<li class="nav-header">:: ตั้งค่าระบบ ::</li>
					<li class="has-sub ">
						<a href="setting.php">
						<i class="fas fa-cogs" style="font-size: 17px"></i>
							<span>ตั้งค่าระบบ</span>
						</a>
					</li>

					<li class="nav-header">:: เกี่ยวกับระบบ ::</li>
					<li class="has-sub ">
						<a href="result_version.php">
							<i class="fas fa-bug" style="font-size: 17px"></i>
							<span>รายงานการปรับปรุงระบบ</span>
						</a>
					</li>
					<li class="has-sub ">
						<a href="tutorail.php" >
							<i class="fa fa-book" style="font-size: 17px"></i>
							<span>แนะนำการใช้งาน </span>
						</a>
					</li>
					
				

					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"  style="font-size: 17px"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
<!-- end #sidebar -->