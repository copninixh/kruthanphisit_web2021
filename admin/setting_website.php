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
                            <h4 class="text-pink"><i class="fas fa-cogs"></i> Path File Manager</h4>
                            
                            <hr>
                            <p class="f-s-16 text-danger text-center">For first time setting and develop only!! <br> You have 1 Record in setting table only!!</p>
                            <?php boxalert(); ?>

                            <?php
                                if(isset($_GET['status']) && isset($_GET['s_id'])){
                                    $status  = filter_input(INPUT_GET , 'status' , FILTER_SANITIZE_STRING);
                                    $s_id  = filter_input(INPUT_GET , 's_id' , FILTER_SANITIZE_NUMBER_INT);
                                    $sqlselect = "SELECT * FROM setting WHERE s_id = '$s_id'";
                                    $queryselect = mysqli_query($conn,$sqlselect);
                                    $fetchselect = mysqli_fetch_array($queryselect);

                                
                            ?>
                                <a href="setting_website.php" class="btn btn-green mb-3"><i class="fas fa-plus"></i> Add new record</a>
                            
                                <form action="process/edit_setting_website.php" method="post" enctype="multipart/form-data">

                                <div class="form-group row m-b-15 add-lesson d-none">
                                    <label class="col-form-label col-md-2">id</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" value="<?php echo $fetchselect['s_id']; ?>" name="s_id" required>
                                        <small class="f-s-12 text-grey-darker">http:// or https://</small>
                                    </div>
                                </div>
                                
                                <div class="form-group row m-b-15 add-lesson">
                                    <label class="col-form-label col-md-2">Protocal</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" value="<?php echo $fetchselect['s_protocal']; ?>" name="s_protocal" required>
                                        <small class="f-s-12 text-grey-darker">http:// or https://</small>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15 add-lesson">
                                    <label class="col-form-label col-md-2">URL Path</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" value="<?php echo $fetchselect['s_pathurl']; ?>"  name="s_pathurl" required>
                                        <small class="f-s-12 text-grey-darker">example: www.yupparaj.ac.th/your_path_file/ckfinder/userfile</small>
                                    </div>
                                </div>

                                    
                                <input type="submit" class="btn btn-warning w-100" name="insert" value="Edit" required>
                                                         
                                </form>

                            <?php }else{ ?>
                                <form action="process/add_setting_website.php" method="post" enctype="multipart/form-data">
                                
                                    <div class="form-group row m-b-15 add-lesson">
                                        <label class="col-form-label col-md-2">Protocal</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5" name="s_protocal" required>
                                            <small class="f-s-12 text-grey-darker">http:// or https://</small>
                                        </div>
                                    </div>

                                    <div class="form-group row m-b-15 add-lesson">
                                        <label class="col-form-label col-md-2">URL Path</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control m-b-5"  name="s_pathurl" required>
                                            <small class="f-s-12 text-grey-darker">example: www.yupparaj.ac.th/your_path_file/ckfinder/userfile</small>
                                        </div>
                                    </div>

                                        
                                    <input type="submit" class="btn btn-green w-100" name="insert" value="Setting" required>
                                        

                                                             
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
                                $sql = "SELECT * FROM `setting`";
                                $result = mysqli_query($conn,$sql);
                                echo '<div class="table-responsive">';
                                    echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
                                    echo'<thead>';
                                    echo'<tr class="fw-700">';
                                    echo'<th width="100px">ID</th>';
                                    echo'<th width="700px" >Protocal</th>';
                                    echo'<th width="700px" >URL Path</th>';
                                    echo'<th width="200px">Edit</th>';
                         
                                    echo'</tr>';
                                    echo'</thead>';
                                    echo'<tbody>';
                                $i=1;
                                    
                                while($row = mysqli_fetch_array($result)){
                                    echo'<tr>';
                                    echo'<td>' .$i++.  '</td>';
                                    echo'<td>'  .$row['s_protocal']. '</td>';
                                    echo'<td>'  .$row['s_pathurl']. '</td>';
                                    echo"<td><a href=setting_website.php?status=edit&s_id=$row[0] class='btn btn-pink'>Edit</a> ";
                                   
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