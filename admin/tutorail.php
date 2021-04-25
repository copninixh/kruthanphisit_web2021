<?php
	session_start();
	include("connect/connect.php");
	if(!$_SESSION['u_id']){
		header('Location: ./index.php?status=2');
	}else{

?>
<!DOCTYPE html>
<html lang="en">
		<?php
			include_once 'component/header.php';
		?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">โหลด...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<?php
			include_once 'component/navbar.php';
		?>
		
		<?php
			include_once 'component/slidebar.php';
		?>
		
		<!-- begin #content -->
		<div id="content" class="content">
	
			<!-- begin page-header -->
			<h1 class="page-header">ระบบระบบบริหารจัดการเว็บไซต์ <small>www.yupparaj.ac.th/thanphisit</small></h1>
			<!-- end page-header -->

			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading bg-pink">
                <h4 class="panel-title s12 fw-700" style="font-size: 15px">วีดิโอแนะนำการใช้งาน</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<h4 class="text-center">วีดิโอแนะนำการใช้งาน</h4>
					<hr>
                    <div class="row">
                        <div class="col-xl-4 col-md-4">
                            <h5 class="s1 text-center">ตอนที่ 1 แนะนำเครื่องมือและส่วนประกอบ</h5>
                            <hr>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R8o1bg59pG8" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <h5 class="s1 text-center">ตอนที่ 2 การบริหารจัดการบทเรียน (เพิ่ม แก้ไข ลบ)</h5>
                            <hr>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Hks2tA4I76g" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <h5 class="s1 text-center">ตอนที่ 3 การจัดการเมนูในแต่ละบทเรียน (เพิ่ม แก้ไข ลบ)</h5>
                            <hr>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zvgkVYH7Izc" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <h5 class="s1 text-center">ตอนที่ 4 การจัดการหน้าหลักเว็บไซต์ (รายละเอียดเว็บไซต์)</h5>
                            <hr>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bJtQU5u5_KQ" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <h5 class="s1 text-center">ตอนที่ 5 การจัดการหน้าหลักเว็บไซต์ (Navbar)</h5>
                            <hr>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DWGFYQIc_TI" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <h5 class="s1 text-center">การตกแต่งสไตล์ ตอนที่ 1 ตาราง Table</h5>
                            <hr>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DWGFYQIc_TI" allowfullscreen></iframe>
                            </div>
                        </div>


                    </div>

				
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		<?php
			include_once 'component/footer.php';
    	?>		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php
		include_once 'component/jslink.php';
    ?>
  
	

	<!-- ================== END BASE JS ================== -->
</body>
</html>

<script>
	var editor=CKEDITOR.replace('editor1',{
		extraPlugins:'filebrowser',
		filebrowserBrowseUrl:'browser.php',
		filebrowserUploadMethod:"form",
		filebrowserUploadUrl:"upload.php"
	});
</script>

<?php }  ?>