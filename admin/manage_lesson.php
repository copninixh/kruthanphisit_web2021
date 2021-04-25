<?php
	session_start();
	include("connect/connect.php");
    include("function.php");
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

           


            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading bg-pink">
                    <h4 class="panel-title s12 fw-700" style="font-size: 15px">เมนูการใช้งาน</h4>
                </div>

                <div class="panel-body">
                    <a href="add_lesson.php" class="btn btn-success mb-3"><i class="fas fa-plus"></i> เพิ่มบทเรียน</a>
                  
                    <?php boxalert(); ?>
                    <?php
						$sql = "SELECT * FROM `lesson` ORDER BY `l_id` ASC";
						$result = mysqli_query($conn,$sql);
						echo '<div class="table-responsive">';
							echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
							echo'<thead class="bg-pink text-light">';
							echo'<tr class="fw-700">';
							echo'<th width="100px">บทที่</th>';
							echo'<th width="700px" class="text-left">ชื่อบทเรียน</th>';
							echo'<th width="200px">บทเรียน</th>';
							echo'<th width="200px">แก้ไขบทเรียน</th>';
							echo'<th width="200px">ลบบทเรียน</th>';
							echo'</tr>';
							echo'</thead>';
							echo'<tbody>';
							
						while($row = mysqli_fetch_array($result)){
							echo'<tr>';
							echo'<td>' .$row['l_lesson'].  '</td>';
							echo'<td class="text-left">' .$row['l_namelesson'].  '</td>';
							echo"<td><a href=../theme.php?lesson=$row[l_lesson]&id=$row[0] class='btn btn-green' style='color:white' target='_blank'><i class='fas fa-book-reader'></i> เข้าสู่บทเรียน</a> </td> ";
							echo"<td><a href=editlesson.php?id=$row[0] class='btn btn-pink'><i class='fas fa-edit'></i> แก้ไขบทเรียน</a> ";
                            echo"<td><a onClick=\"javascript: return confirm('ต้องการลบบทเรียน ($row[l_namelesson]) ใช่หรือไม่? ไม่สามารถกู้คืนบทเรียนได้ภายหลัง! ');\" href=process/deletelesson.php?id=$row[0] class='btn btn-danger'><i class='far fa-trash-alt'></i> ลบบทเรียน</a> ";
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