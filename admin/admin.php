<?php
	session_start();
	include("connect/connect.php");
	if(!$_SESSION['u_id']){
		header('Location: ./index.php?status=error');
	}else{
?>
<!DOCTYPE html>
<html lang="en">
<?php
	include_once 'component/header.php';
?>

<body class="">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <div class="material-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
                </circle>
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
                    <h1 class="page-header ">ระบบบริหารจัดการเว็บไซต์<small>&nbsp;www.yupparaj.ac.th/thanphisit</small>
                    </h1>
                </div>
                <br>
            </div>

        <?php
			$sqlse = "SELECT * FROM lesson ORDER BY l_id ASC";
			$resultse  = mysqli_query($conn,$sqlse);
			$numse = mysqli_num_rows($resultse);
		?>

            <div class="row">
                <!-- begin col-6 -->
                <div class="col-xl-6 col-md-6">
                    <!-- begin card -->
                    <div class="card border-0 bg-blue-dark text-white mb-3 overflow-hidden">
                        <!-- begin card-body -->
                        <div class="card-body">
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-7 -->
                                <div class="col-xl-7 col-lg-8">
                                    <!-- begin title -->
                                    <div class="mb-3 text-grey">
                                        <b>จำนวนบทเรียนในระบบ</b>
                                    </div>
                                    <!-- end title -->
                                    <!-- begin total-sales -->
                                    <div class="d-flex mb-1">
                                        <h2 class="mb-0"><span data-animation="number"
                                                data-value="<?php echo $numse; ?>"></span>&nbsp;บทเรียน</h2>
                                        <br>
                                        <br>

                                    </div>
                                    <!-- end total-sales -->
                                    <!-- begin percentage -->
                                    <div class="progress progress-xs rounded-lg bg-blue-dark-darker m-b-5">
                                        <div class="progress-bar progress-bar-striped rounded-right bg-pink"
                                            data-animation="width" data-value="95%" style="width: 55%;"></div>
                                    </div>
                                    <!-- end percentage -->
                                    <hr class="bg-white-transparent-2">
                                    <!-- begin row -->
                                    <div class="row text-truncate">
                                        <div class="col-12">
                                            <p class="text-grey">หมายเหตุ : นับรวมจุดประสงค์การเรียนรู้ <br>แบบฝึกหัด
                                                แบบทดสอบก่อนและหลังเรียน</p>
                                            <br>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col-7 -->
                                <!-- begin col-5 -->
                                <div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
                                    <img src="assets/img/web.png" height="150px" class="d-none d-lg-block">
                                </div>
                                <!-- end col-5 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-6 -->

                <div class="col-xl-6 col-md-6 ">
                    <div class="note note-pink" style="margin-bottom: unset">
                        <div class="note-icon">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <div class="note-content">
                            <h4><b>ข้อแนะนำการใช้งาน</b></h4>
                            <p>ควรใช้คอมพิวเตอร์หรือโน๊ตบุ๊คในการบริหารจัดการเว็บไซต์ </p>
                        </div>
                    </div>

                    <div class="note note-warning mt-4">
                        <div class="note-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="note-content">
                            <h4><b>แจ้งการปรับปรุงระบบ</b></h4>
                            <p>การปรับปรุงระบบครั้งถัดไปจะปรับปรุงเมื่อ..... </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading bg-pink">
                    <h4 class="panel-title s12 fw-700" style="font-size: 15px">เมนูการใช้งาน</h4>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-3">
                            <a href="manage_lesson.php" class="btn btn-pink w-100" style="font-size:16px">
                                <img src="assets/img/lesson.png" class="img-fluid" width="20%">
                                <br>
                                บริหารจัดการเนื้อหาบทเรียน
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-3">
                            <a href="manage_menu.php" class="btn btn-pink w-100" style="font-size:16px">
                                <img src="assets/img/book.png" class="img-fluid" width="20%">
                                <br>
                                บริหารจัดการเมนูบทเรียน
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-3">
                            <a href="manage_website.php" class="btn btn-pink w-100" style="font-size:16px">
                                <img src="assets/img/web.png" class="img-fluid" width="20%">
                                <br>
                                บริหารจัดการหน้าหลักเว็บไซต์
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-3">
                            <a href="setting.php" class="btn btn-pink w-100" style="font-size:16px">
                                <img src="assets/img/config.png" class="img-fluid" width="20%">
                                <br>
                                ตั้งค่าระบบ
                            </a>
                        </div>

                    </div>
                    <hr>
                    <?php
						$sql = "SELECT * FROM `lesson` ORDER BY `l_id` ASC";
						$result = mysqli_query($conn,$sql);
						echo '<div class="table">';
							echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
							echo'<thead class="bg-pink text-light">';
							echo'<tr class="fw-700">';
							echo'<th width="100px">บทที่</th>';
							echo'<th width="400px" class="text-left">ชื่อบทเรียน</th>';
							echo'<th width="200px">บทเรียน</th>';
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
							
						while($row = mysqli_fetch_array($result)){
							echo'<tr>';
							echo'<td>' .$row['l_lesson'].  '</td>';
							echo'<td class="text-left">' .$row['l_namelesson'].  '</td>';
							echo"<td><a href=../theme.php?lesson=$row[l_lesson]&id=$row[0] class='btn btn-green' style='color:white' target='_blank'><i class='fas fa-book-reader'></i> เข้าสู่บทเรียน</a> </td> ";
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
        <a href="javascript:;" class="btn btn-icon btn-circle btn-pink btn-scroll-to-top fade"
            data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
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