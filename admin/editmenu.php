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
					<h4 class="panel-title fw-700 s12">แก้ไขเมนู</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<h4>ระบบแก้ไขเมนูบทเรียน</h4>
					<hr>
                    <?php
                        if(isset($_GET['id'])){
                            $m_id = $_GET['id'];
                            $sql = "SELECT * FROM menulesson WHERE m_id = '$m_id';";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                        }
                    ?>
					<form action="process/editmenuact.php" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control d-none" id="m_id" name="m_id"  value="<?php echo $row['m_id'];?>" readonly>
                   
						
						<div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">บทที่</label>
								<div class="col-md-10">
									<input type="number" class="form-control m-b-5" name="m_lesson" value="<?php echo $row['m_lesson']; ?>" >
									
								</div>
						</div>

						<div class="form-group row m-b-15 d-none">
							<label class="col-form-label col-md-2">ชื่อเมนู</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อเมนู" name="m_name" id="m_name" value="<?php echo $row['m_name']; ?>" >
									<small class="f-s-12 text-grey-darker">ตัวอย่างการกรอก : จุดประสงค์การเรียนรู้</small>
								</div>
						</div>

						<div class="form-group row m-b-15 d-none">
							
							<label class="col-form-label col-md-2">ประเภทเนื้อหา</label>
							<div class="col-md-10 mt-2">
								<input type="radio" id="inlineCssRadio1" name="ch" value="1" />
								<label for="inlineCssRadio1">เนื้อหาบทเรียนทั่วไป</label>

								<input type="radio" id="inlineCssRadio1" name="ch"  value="2" />
								<label for="inlineCssRadio1">แบบทดสอบ</label>
								
							</div>
						</div>

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ลิงค์เมนู</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกลิงค์เมนู" name="m_link" id="m_link" value="<?php echo $row['m_link']; ?>">
									<small class="f-s-12 text-grey-darker">**ถ้าต้องการแทรกลิงค์จากภายนอกที่ไม่ใช่จากบทเรียนในเว็บโปรดใส่**</small>
								</div>
						</div>

					

						<input type="submit" class="btn btn-warning w-100" name="submit" value="แก้ไขเมนู">
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

<script>
	var editor=CKEDITOR.replace('editor1',{
		extraPlugins:'filebrowser',
		filebrowserBrowseUrl:'browser.php',
		filebrowserUploadMethod:"form",
		filebrowserUploadUrl:"upload.php"
	});
</script>

<?php }  ?>