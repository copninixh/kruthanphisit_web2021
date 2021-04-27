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
			<h1 class="page-header">ระบบระบบบริหารจัดการเว็บไซต์ <small>www.yupparaj.ac.th/thanphisit</small></h1>
			<!-- end page-header -->
            <div class="row">
                <div class="col-xl-4">
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
                            <h4 class="text-pink"><i class="fas fa-cogs"></i> ตั้งค่าบทเรียน</h4>
                            <hr>
                            <?php boxalert(); ?>

                            <?php
                                if(isset($_GET['status']) && isset($_GET['sl_id'])){
                                    $status  = filter_input(INPUT_GET , 'status' , FILTER_SANITIZE_STRING);
                                    $sl_id  = filter_input(INPUT_GET , 'sl_id' , FILTER_SANITIZE_NUMBER_INT);
                                    $sqlselect = "SELECT * FROM set_lesson WHERE sl_id = '$sl_id'";
                                    $queryselect = mysqli_query($conn,$sqlselect);
                                    $fetchselect = mysqli_fetch_array($queryselect);

                                
                            ?>
                                <a href="setting_lesson.php" class="btn btn-green mb-3"><i class="fas fa-plus"></i> เพิ่มบทเรียน</a>
                            
                                <form action="process/edit_setting_lesson.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row m-b-15 add-lesson">

                                        <div class="col-md-2 d-none">
                                            <input type="text" class="form-control m-b-5" value="<?php echo $fetchselect['sl_id']; ?>" name="sl_id" readonly>
                                        </div>

                                        <label class="col-form-label col-md-2">บทที่</label>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control m-b-5" value="<?php echo $fetchselect['sl_lesson']; ?>" name="sl_lesson" required>
                                        </div>

                                        <label class="col-form-label col-md-2">ชื่อบทเรียน</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control m-b-5" 
                                            value="<?php 
                                           
                                                echo $fetchselect['sl_namelesson'];
                                            
                                            ?>" 
                                            name="sl_namelesson" required>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-warning w-100" name="insert" value="แก้ไข" required>
                                        </div>

                                    </div>                          
                                </form>

                            <?php }else{ ?>
                                <form action="process/setting_lesson.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row m-b-15 add-lesson">
                                        <label class="col-form-label col-md-2">บทที่</label>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control m-b-5" name="sl_lesson" required>
                                        </div>

                                        <label class="col-form-label col-md-2">ชื่อบทเรียน</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control m-b-5" 
                                          
                                            name="sl_namelesson" required>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-green w-100" name="insert" value="เพิ่ม" required>
                                        </div>

                                    </div>                          
                                </form>

                            <?php } ?>
                              

                         

                        
                        </div>
                    </div>
                    <!-- end panel -->
                </div>

                <div class="col-xl-8">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading bg-pink">
                        <h4 class="panel-title s12 fw-700" style="font-size: 15px">ผลการตั้งค่า</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h4 class=""></h4>
                         
                            <?php
                                $sql = "SELECT * FROM `set_lesson` ORDER BY `sl_lesson` ASC";
                                $result = mysqli_query($conn,$sql);
                                echo '<div class="table-responsive">';
                                    echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
                                    echo'<thead>';
                                    echo'<tr class="fw-700">';
                                    echo'<th width="100px">บทที่</th>';
                                    echo'<th width="700px" >ชื่อบทเรียน</th>';
                               
                                    echo'<th width="200px">แก้ไขบทเรียน</th>';
                                    echo'<th width="200px">ลบบทเรียน</th>';
                                    echo'</tr>';
                                    echo'</thead>';
                                    echo'<tbody>';
                                    
                                while($row = mysqli_fetch_array($result)){
                                    echo'<tr>';
                                    echo'<td>' .$row['sl_lesson'].  '</td>';
                                    echo'<td>' .$row['sl_namelesson'].  '</td>';
                                 
                                    echo"<td><a href=setting_lesson.php?status=edit&sl_id=$row[0] class='btn btn-pink'>แก้ไขบทเรียน</a> ";
                                    echo"<td><a onClick=\"javascript: return confirm('ต้องการลบบทเรียน ($row[sl_namelesson]) ใช่หรือไม่? ไม่สามารถกู้คืนบทเรียนได้ภายหลัง! ');\" href=process/delete_set_lesson.php?id=$row[0] class='btn btn-danger'>ลบบทเรียน</a> ";
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