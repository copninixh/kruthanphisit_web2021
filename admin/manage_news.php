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
			<div class="row">
				
				<div class="col-xl-12">
					<h1 class="page-header ">ระบบบริหารจัดการเว็บไซต์<small>&nbsp;www.yupparaj.ac.th/thanphisit</small></h1>
				</div>
				<br>
				
				

			</div>

		

			

			<!-- begin panel -->
			<div class="row">
				<div class="col-xl-3">
					<div class="panel panel-inverse">
						<div class="panel-heading bg-pink">
							<h4 class="panel-title s12 fw-700" style="font-size: 15px">เมนูการใช้งานบริหารจัดการหน้าหลักเว็บไซต์</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<a href="add_news.php" class="btn btn-purple">เพิ่มข่าวประกาศ/ประชาสัมพันธ์</a>
						</div>
					</div>
				</div>

				<div class="col-xl-9">
				<div class="panel panel-inverse">
					<div class="panel-heading bg-pink">
						<h4 class="panel-title s12 fw-700" style="font-size: 15px">บริหารจัดการหน้าหลักเว็บไซต์</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
					<h3>ตารางแสดงรายละเอียดเว็บไซต์</h3>
						<hr>
						<?php boxalert(); ?>
						<?php
							$sql = "SELECT * FROM `news` ORDER BY `n_id` ASC";
							$result = mysqli_query($conn,$sql);
							
								echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
								echo'<thead>';
								echo'<tr class="fw-700">';
								echo'<th width="200px">ชื่อข่าว</th>';
								echo'<th width="200px">เข้าชมบทเรียน</th>';
								echo'<th width="200px">แก้ไขรายละเอียด</th>';
								echo'<th width="200px">ลบรายละเอียด</th>';
								echo'</tr>';
								echo'</thead>';
								echo'<tbody>';
							while($row = mysqli_fetch_array($result)){
								echo'<tr>';
								echo'<td>' .$row['n_name'].  '</td>';
								echo"<td><a href=../news_detail.php?id=$row[0] class='btn btn-green' style='color:white' target='_blank'>รายละเอียด</a> </td> ";
								echo"<td><a href=edit_news.php?id=$row[0] class='btn btn-pink'>แก้ไขข่าว</a> ";
								echo"<td><a onClick=\"javascript: return confirm('ต้องการลบข่าว $row[n_name] ใช่หรือไม่? ไม่สามารถกู้คืนได้ภายหลัง! ');\" href=process/delete_news.php?id=$row[0] class='btn btn-danger'>ลบข่าว</a></td> ";
								echo'</tr>';
							}
							echo'</tbody>';
							echo'</table>';
						
						?>
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
		<a href="javascript:;" class="btn btn-icon btn-circle btn-pink btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
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
<?php }  ?>