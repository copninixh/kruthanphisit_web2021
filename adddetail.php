<?php
	session_start();
	include("connect/connect.php");
	include("function.php");
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
			<h1 class="page-header">ระบบบริหารจัดการเว็บไซต์ <small>www.yupparaj.ac.th/thanphisit</small></h1>
			<!-- end page-header -->

			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading bg-pink">
					<h4 class="panel-title s12 fw-700" style="font-size: 15px">เพิ่มรายละเอียดเว็บไซต์</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<h4>ระบบเพิ่มรายละเอียดเว็บไซต์</h4>
					
					<hr>
                    <?php boxalert(); ?>
					
					<form action="process/adddetailact.php" method="post" enctype="multipart/form-data">

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">รายละเอียดเกี่ยวกับ</label>
								<div class="col-md-10">
									<select class="form-control" name="d_lesson" id="d_lesson">
											<option>แนะนำการใช้งาน</option>
											<option>คำอธิบายรายวิชา</option>
											<option>หน่วยการเรียนรู้</option>
											<option>แลกเปลี่ยนเรียนรู้</option>
                                            <option>แผนผังไซต์</option>
											<option>ครูผู้สอน</option>
											<option>อื่นๆ</option>
									</select>
								</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ชื่อ</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อ" name="d_name" id="d_name" required>
									<small class="f-s-12 text-grey-darker">ตัวอย่างการกรอก : แนะนำการใช้งาน</small>
								</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">รายละเอียด</label>
								<div class="col-md-10">
								<textarea class="ckeditor" id="editor1" name="d_detail" rows="20"></textarea>
								</div>
						</div>
						

						

						
						<input type="submit" class="btn btn-green w-100" style="color: white" name="submit" value="เพิ่มรายละเอียด">
                    </form>
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

<script src="ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('editor1',{
		filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
		filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/upload/'
	});
</script>

<?php }  ?>