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
<body >
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
					<h4 class="panel-title s12" style="font-size: 15px">เมนูการใช้งาน</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
				
					
					<a href="admin.php" class="btn btn-purple"><i class="fas fa-home"></i> &nbsp;กลับหน้าหลัก</a>
					<hr>
					<?php boxalert(); ?>
					
					<?php
						$sql = "SELECT * FROM `menulesson` ORDER BY `m_id` ASC";
						$result = mysqli_query($conn,$sql);
						echo '<div class="table-responsive">';
							echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
							echo'<thead class="text-light bg-pink">';
							echo'<tr class="">';
							echo'<th width="100px">บทที่</th>';
							echo'<th width="700px">ชื่อเมนู</th>';
							echo'<th width="200px">เข้าชมเมนู</th>';
							echo'<th width="200px">แก้ไขเมนู</th>';
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
						while($row = mysqli_fetch_array($result)){
							echo'<tr>';
							echo'<td>' .$row['m_lesson'].  '</td>';
							echo'<td>' .$row['m_name'].  '</td>';
							echo"<td><a href=../theme.php?lesson=$row[m_lesson]&id=$row[0] class='btn btn-green' style='color:white'><i class='fas fa-book-reader'></i> เข้าสู่เมนู</a> </td> ";
							echo"<td><a href=editmenu.php?id=$row[0] class='btn btn-pink'><i class='fas fa-edit'></i> แก้ไขเมนู</a> ";
							echo'</tr>';
						}
						echo'</tbody>';
						echo'</table>';
						echo '</div>';
					?>
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
<?php }  ?>