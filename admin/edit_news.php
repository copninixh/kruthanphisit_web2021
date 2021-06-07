<?php
	session_start();
	include("connect/connect.php");
	include("function.php");
	if(!$_SESSION['u_id']){
		header('Location: ./index.php?status=2');
	}else{

?>
<?php
    if(isset($_GET['id'])){
        $n_id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
        $sql = "SELECT * from news WHERE n_id = '$n_id'";
        $query = mysqli_query($conn,$sql);
        $fetch = mysqli_fetch_array($query);
    }
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
            <h1 class="page-header">ระบบบริหารจัดการเว็บไซต์ <small>www.yupparaj.ac.th/thanphisit</small></h1>
            <!-- end page-header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading bg-pink">
                    <h4 class="panel-title s12 fw-700" style="font-size: 15px">เพิ่มบทเรียน</h4>
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
                    <h4>เพิ่มข่าวสาร/ประกาศ/ประชาสัมพันธ์</h4>
                    <hr>

                    <?php boxalert();?>


                    <form action="process/edit_news.php" method="post" enctype="multipart/form-data">

                    <div class="form-group row m-b-15 d-none">
                            <label class="col-form-label col-md-2">ด</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control m-b-5" value="<?php echo $fetch['n_id']; ?>"
                                    name="n_id" >
                              
                            </div>
                        </div>

                       
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-2">ชื่อข่าว</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control m-b-5" placeholder="ชื่อข่าว" value="<?php echo $fetch['n_name']; ?>"
                                    name="n_name" id="n_name" required>
                         
                            </div>
                        </div>

                    
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-2">รายละเอียด</label>
                            <div class="col-md-10">
                                <textarea class="ckeditor" id="editor1" name="n_detail" rows="20">
                                    <?php echo $fetch['n_detail']; ?>
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group row m-b-15 d-none">
                            <label class="col-form-label col-md-2">ว</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control m-b-5" value="<?php echo $fetch['n_date']; ?>"
                                    name="n_date" id="n_date">
                              
                            </div>
                        </div>

                        <div class="form-group row m-b-15 d-none">
                            <label class="col-form-label col-md-2">ด</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control m-b-5" value="<?php echo $fetch['n_month']; ?>"
                                    name="n_month" >
                              
                            </div>
                        </div>

                        <div class="form-group row m-b-15 d-none">
                            <label class="col-form-label col-md-2">ป</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control m-b-5" value="<?php echo $fetch['n_year']; ?>"
                                    name="n_year" >
                              
                            </div>
                        </div>

                        <div class="form-group row m-b-15 d-none">
                            <label class="col-form-label col-md-2">ref</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control m-b-5" value="<?php echo $_SESSION['u_name']. '&nbsp;'.$_SESSION['u_lastname'] ?>"
                                    name="n_ref">
                              
                            </div>
                        </div>






                        <input type="submit" class="btn btn-warning w-100" style="color: white" name="edit_news"
                            value="แก้ไขข่าว">
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
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/upload/'
});
</script>

<?php }  ?>