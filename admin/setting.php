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
            <div class="row">
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                        <h4 class="panel-title s12 fw-700" style="font-size: 15px">ตั้งค่าระบบ</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h4 class=""><i class="fas fa-cogs"></i> เลือกการตั้งค่าระบบ</h4>
                            <hr>
                            <div class="row">

								<div class="col-xl-3 col-md-6 mb-3">
                                    <a href="setting_lesson.php" class="btn btn-pink" style="font-size:16px">
                                        <img src="assets/img/lesson.png" class="img-fluid" width="20%">
                                        <br>
                                        ตั้งค่าบทเรียนและเมนู
                                    </a>
                                </div>
                                
                                <div class="col-xl-3 col-md-6 mb-3">
                                    <a href="setting_user.php" class="btn btn-pink" style="font-size:16px">
                                        <img src="assets/img/user.png" class="img-fluid" width="20%">
                                        <br>
                                        ตั้งค่าผู้ดูแลระบบ
                                    </a>
                                </div>

								

                                <!--div class="col-xl-3 col-md-6 mb-3">
                                    <a href="setting_website.php" class="btn btn-pink" style="font-size:16px">
                                        <img src="assets/img/config.png" class="img-fluid" width="20%">
                                        <br>
                                        ตั้งค่าทั่วไป
                                    </a>
                                </div-->


                            
                            </div>
                        
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
            </div>
			
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