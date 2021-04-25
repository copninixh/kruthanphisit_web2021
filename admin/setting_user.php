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
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                    data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                    data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                    data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                    data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h4 class="text-pink"><i class="fas fa-cogs"></i> ตั้งค่าผู้ดูแลระบบ</h4>
                            <hr>
                            <?php boxalert(); ?>

                            <?php
                                if(isset($_GET['status']) && isset($_GET['u_id'])){
                                    $status  = filter_input(INPUT_GET , 'status' , FILTER_SANITIZE_STRING);
                                    $u_id  = filter_input(INPUT_GET , 'u_id' , FILTER_SANITIZE_NUMBER_INT);
                                    $sqlselect = "SELECT * FROM user WHERE u_id = '$u_id'";
                                    $queryselect = mysqli_query($conn,$sqlselect);
                                    $fetchselect = mysqli_fetch_array($queryselect);

                                
                            ?>
                            <a href="setting_user.php" class="btn btn-green mb-3"><i class="fas fa-plus"></i>
                                เพิ่มผู้ดูแลระบบ</a>

                            <form action="process/edit_setting_user.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อ</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="ชื่อ" name="u_id" value="<?php echo $fetchselect["u_id"] ?>"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">คำนำหน้าชื่อ</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="u_frontname" id="u_frontname">
                                            <option><?php echo $fetchselect["u_frontname"] ?></option>
                                            <option>นาย</option>
                                            <option>นาง</option>
                                            <option>นางสาว</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อ</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="ชื่อ" name="u_name" value="<?php echo $fetchselect["u_name"] ?>"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">นามสกุล</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="นามสกุล" value="<?php echo $fetchselect["u_lastname"] ?>"
                                            name="u_lastname" required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">Username</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="Username" value="<?php echo $fetchselect["u_username"] ?>"
                                            name="u_username" required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="Password" value="<?php echo $fetchselect["u_password"] ?>"
                                            name="u_password" required>
                                    </div>
                                </div>




                                <input type="submit" class="btn btn-warning w-100" name="insert" value="แก้ไข" required>
                            </form>

                            <?php }else{ ?>
                            <form action="process/add_setting_user.php" method="post" enctype="multipart/form-data">

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">คำนำหน้าชื่อ</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="u_frontname" id="u_frontname">
                                            <option>นาย</option>
                                            <option>นาง</option>
                                            <option>นางสาว</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">ชื่อ</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="ชื่อ" name="u_name"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">นามสกุล</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="นามสกุล"
                                            name="u_lastname" required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">Username</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="Username"
                                            name="u_username" required>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control m-b-5" placeholder="Password"
                                            name="u_password" required>
                                    </div>
                                </div>




                                <input type="submit" class="btn btn-green w-100" name="insert" value="เพิ่ม" required>



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
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                    data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                    data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                    data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                    data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h4 class=""></h4>

                            <?php
                                $sql = "SELECT * FROM `user` ORDER BY `u_id` ASC";
                                $result = mysqli_query($conn,$sql);
                                
                                echo '<div class="table-responsive">';
                                    echo'<table class="table table-striped m-b-0 text-center" style="font-size:14px" id="data-table-default">';
                                    echo'<thead>';
                                    echo'<tr class="fw-700">';
                                    echo'<th width="100px">ลำดับที่</th>';
                                    echo'<th width="700px" >ชื่อผู้ดูแลระบบ</th>';
                                    echo'<th width="500px" >Username</th>';
                                    echo'<th width="200px">แก้ไข</th>';
                                    echo'<th width="200px">ลบ</th>';
                                    echo'</tr>';
                                    echo'</thead>';
                                    echo'<tbody>';
                                    $i = 1;
                                while($row = mysqli_fetch_array($result)){
                                    echo'<tr>';
                                    echo'<td>' .$i++.  '</td>';
                                    echo'<td>' .$row['u_name'].'&nbsp;'.$row['u_lastname'].  '</td>';
                                    echo'<td>' .$row['u_username'].  '</td>';
                                 
                                    echo"<td><a href=setting_user.php?status=edit&u_id=$row[0] class='btn btn-pink'>แก้ไข</a> ";
                                    echo"<td><a onClick=\"javascript: return confirm('ต้องการลบใช่หรือไม่? ไม่สามารถกู้คืนได้ภายหลัง! ');\" href=process/delete_setting_user.php?id=$row[0] class='btn btn-danger'>ลบ</a> ";
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
        <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade"
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

<script>
var editor = CKEDITOR.replace('editor1', {
    extraPlugins: 'filebrowser',
    filebrowserBrowseUrl: 'browser.php',
    filebrowserUploadMethod: "form",
    filebrowserUploadUrl: "upload.php"
});
</script>

<?php }  ?>