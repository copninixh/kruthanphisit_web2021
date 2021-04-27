<!DOCTYPE html>
<html lang="en">
<?php
	include_once 'component/header.php';
?>
<style>
    body{
        font-family: 'Sarabun', sans-serif;
    }
</style>
<body class="pace-top s1">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(assets/img/login.jpg)"></div>
				
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand text-center">
					<img src="assets/img/logo.png" alt="" class="img-fluid" width="30%">
                        <br>
						 <b class="text-pink" style="font-size: 19px">Admin Control Panel - Learning Platform</b> 
						<small>www.yupparaj.ac.th/thanphisit</small>
					</div>
					
				</div>
				
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content" >
						<?php
							if (isset($_GET['status'])) {
								$status = $_GET['status'];
						?>
						<?php if($status =='1'){?>
						<div class="alert alert-danger s1 text-left">
							<div class="container">
								<div class="alert-icon">
									<i class="fas fa-exclamation-triangle"></i>
										<b class="" style="font-size: 15px">&nbsp;  username หรือ password ไม่ถูกต้อง !</b>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div> 
						</div>
						<?php }else if($status =='2'){?>
						<div class="alert alert-danger s1 text-left">
							<div class="container">
								<div class="alert-icon">
									<i class="fas fa-exclamation-triangle"></i>
										<b class="" style="font-size: 15px">&nbsp;  กรุณาลงชื่อเข้าใช้งาน !</b>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div> 
						</div>
						<?php }?>
						<?php }?>
					<form action="process/loginact.php" class="s1" method="post" enctype="multipart/form-data" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" class="form-control form-control-lg s1" placeholder="Username" name="u_username" id="u_username" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg s1" placeholder="Password" name="u_password" id="u_password" required />
						</div>
						
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn btn-pink btn-block btn-lg">Login</button>
						</div>
						
						<hr />
						<p class="text-center"><a class="text-center" style="text-decoration: none;text-decoration-color:yellowgreen" href="../index.php">กลับหน้าหลัก</a></p>
						<p class="text-center text-grey-darker mb-0">
							&copy; <?php echo date("Y");  ?> Admin Control - Copninich All Rights Reserved<br>
							Yupparaj Wittayalai School
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->

		
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php
			include_once 'component/jslink.php';
		?>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
