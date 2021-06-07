<?php 
  session_start(); 
  include("connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<!--start head-->
<?php
    include_once 'component/head.php';
?>
<!--end head-->

<style>
.headbanner {
    font-weight: 700;
    font-family: 'Kanit', sans-serif;
}

.head {
    font-weight: 500;
}

.card-title {
    font-family: 'Kanit', sans-serif;
}

.kanit {
    font-family: 'Kanit', sans-serif;
}

.blue {
    color: #304fa0;
}

.footer-link {
    color: white;
    transition: 0.3s;
}

.footer-link:hover,
.footer-link:active {
    color: #304fa0;
}

.main-menu {
    border: 1px solid lightgray;
    border-radius: 5px;
    background-color: white;
    color: black;
    font-size: 15px;
    transition: 0.2s;
}

.main-menu:hover,
.main-menu:active {
    border: 1px solid #304fa0;
    transform: translate(10px, 0px);
    background-color: #304fa0;
}

.parallax1 {
    background-image: url(assets/pic/paralax.jpg);
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

.text-marquee {
    background-image: url(assets/img/linebanner.jpg);
    border-radius: 100px;
}

.box-header {
    background-color: #0f558c;
    color: white;
    height: auto;
    width: auto;
    padding: 5px;
    margin: -5px 0 0;
    border-top: 5px solid #2196f3;
}

.btn {
    font-size: 14px;
}

#topbar {
    background-color: white;

    min-height: 106px;
    z-index: 999999999;
    font-size: 16px;

    padding: 10px 5%;
    font-weight: 200;
    display: block;
    position: relative;
    top: 0px;
    width: 100%;
}

.navbar .navbar-nav .nav-item .nav-link {
    font-size: 15px;
}

.bottom-banner {
    margin: 0;
    padding: 0;
    position: relative;
    margin-top: -110px;

    background: url("assets/pic/bottombanner.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    max-width: 100%;
    height: 330px;
}

.bottom-banner2 {
    margin: 0;
    padding: 0;
    position: relative;
    margin-top: -110px;


    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    max-width: 100%;

}

.bottom-banner3 {
    margin: 0;
    padding: 0;
    position: relative;
    margin-top: -20px;


    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    max-width: 100%;

}

.bottom-banner4 {
    margin: 0;
    padding: 0;
    position: relative;
    margin-top: -140px;


    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    max-width: 100%;

}

#bold {
    font-weight: 700;
    font-family: 'Kanit';
}

#kanit {
    font-family: 'Kanit';
}

h1,
h2,
h3,
h4,
h5 {
    font-family: 'Kanit';
}

p {
    font-family: 'Kanit';
}

#curve {
    border-radius: 5px;
}

.webname {
    font-size: 27px;
}


*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.bg,
.overlay {
    text-align: left;
}

.blur,
.overlay {
    transition: 0.3s all;
    border-radius: 3px;
}

.bg {
    float: left;
    max-width: 100%;
    position: relative;
    margin: 0.5%;
    box-shadow: inset 0px 0px 0px 10px #1a232d;
}

.bg .blur {
    width: 100%;
    margin-bottom: -4px;
    -webkit-filter: blur(1px);
    filter: blur(1px);
}

.bg .overlay {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    color: #fff;
    background: rgba(0, 0, 0, 0.2);
}

.bg:hover .overlay {
    opacity: 1;
}

.bg:hover .blur {
    -webkit-filter: blur(0px);
    filter: blur(0px);
}

.a:after {
    content: "";
    /* This is necessary for the pseudo element to work. */
    display: block;
    /* This will put the pseudo element on its own line. */
    width: 0%;
    /* Change this to whatever width you want to have before hover. */
    padding-top: 4px;
    /* This creates some space between the element and the border. */
    border-bottom: 3px solid #304fa0;
    /* This creates the border. Replace black with whatever color you want. */
    transition: .5s;
    /* This establishes the amount of time in seconds the animation should take from start to finish */
}

.a:hover:after {
    width: 100%;
    /* This will be the new width of your border when on hover */
}

.section-title{
    padding: 14px;
    background-color: #e91e63;
}
</style>

<body class="bg-white">
    <!--start navbar-->
    <?php
            include_once 'component/navbar.php';
        ?>
    <!--end navbar-->

    <!--start banner-->

    <?php
            include_once 'component/banner.php';
        ?>


    <!--end banner-->



    <!--div class="bottom-banner"></div-->

    <img src="assets/pic/bottombanner2.png" class="img-fluid bottom-banner2 d-none d-xl-block" alt="">

    <!-- Section 1 -->
    <div class="col-xl-12 py-4" style="background-color:#192635">

        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-white col-md-12  pb-5">
                    <div class="container">
                        <h4 class="s5 text-center pt-4  wow fadeInDown ">
                            ยินดีต้อนรับเข้าสู่บทเรียนบนเครือข่ายอินเทอร์เน็ต <br>เรื่อง การเขียนโปรแกรมด้วยภาษาซี
                            สําหรับนักเรียนชั้นมัธยมศึกษาปีที่ 4</h4>
                        <hr style="background-color: while;">

                        <div class="owl-carousel owl-one owl-theme d-none d-sm-block">
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession1.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 1<br />แนะนำภาษาซี</h3>
                                        <p class="pl-5 pr-5">
                                            ภาษาซีเป็นภาษาที่ใช้งานได้กับเครื่องคอมพิวเตอร์หลายระดับ </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession2.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 2<br />ผังงาน Flowchart</h3>
                                        <p class="pl-5 pr-5"> ผังงาน (Flowchart) คือ
                                            สัญลักษณ์แสดงการอธิบายลำดับขั้นตอนการทำงาน</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession3.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 3<br />การใช้งาน Code::Blocks</h3>
                                        <p class="pl-5 pr-5">การงานใช้โปรแกรม Code::Blocks
                                            เพื่อเชื่อมต่อโค้ดภาษาซีกับซอฟท์แวร์</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession4.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 4<br />ชนิดข้อมูลและตัวแปร</h3>
                                        <p class="pl-5 pr-5">
                                            เครื่องหมายและนิพจน์เป็นสิ่งสำคัญมากที่ผู้เขียนโปรแกรมควรจะเข้าใจ...</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession5.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 5<br />การแสดงผลและรับข้อมูล</h3>
                                        <p class="pl-5 pr-5">
                                            การรับข้อมูลเป็นการนำเอาค่าส่งเข้ามาให้โปรแกรมคอมพิวเตอร์ทำการประมวลผล</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession6.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 6<br />การวนรอบและหยุดทำงาน</h3>
                                        <p class="pl-5 pr-5">Loop นั้น เป็นการเขียนโปรแกรมเพื่อให้เกิดการทำงานแบบซ้ำ ๆ
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession7.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 7<br />การตรวจสอบเงื่อนไข</h3>
                                        <p class="pl-5 pr-5">
                                            การตรวจสอบเงื่อนไขการทำงานเพื่อให้โปรแกรมทำงานตามขั้นตอนที่ได้กำหนดไว้</p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession8.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 8<br />ฟังก์ชั่น</h3>
                                        <p class="pl-5 pr-5">ภาษาคอมพิวเตอร์แต่ละภาษานั้น
                                            ล้วนมีฟังก์ชันให้เลือกใช้อยู่ส่วนหนึ่ง</p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession9.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 9<br />โครงงานคอมพิวเตอร์</h3>
                                        <p class="pl-5 pr-5">
                                            กิจกรรมอิสระที่สามารถเลือกศึกษาตามความสนใจโดยใช้ทักษะและประสบการณ์</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sm -->

                        <div class="owl-carousel owl-one owl-theme d-block d-sm-none">
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession1.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-3" id="bold">บทที่ 1<br />แนะนำภาษาซี</h3>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession2.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-3" id="bold">บทที่ 2<br />ผังงาน Flowchart</h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession3.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 3<br />การใช้งาน Code::Blocks</h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession4.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-3" id="bold">บทที่ 4<br />ชนิดข้อมูลและตัวแปร</h3>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession5.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 5<br />การแสดงผลและรับข้อมูล</h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession6.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-1" id="bold">บทที่ 6<br />การวนรอบและหยุดทำงาน</h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession7.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-3" id="bold">บทที่ 7<br />การตรวจสอบเงื่อนไข</h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession8.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-3" id="bold">บทที่ 8<br />ฟังก์ชั่น</h3>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="bg a">
                                    <img src="assets/pic/lession9.jpg" class="blur" alt="">
                                    <div class="overlay">
                                        <h3 class="pl-5 pt-3" id="bold">บทที่ 9<br />โครงงานคอมพิวเตอร์</h3>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-5 col-md-5 col-lg-5 d-none d-xl-block d-none d-lg-block d-none d-md-block wow fadeInLeft mt-xl-5 mt-lg-3 mt-md-3"
                        align="center">
                        <br>
                        <img src="assets/img/01.png" class="img-fluid " width="70%" alt="">
                    </div>
                    <div class="col-xl-7 col-md-7 col-lg-7 pt-5 pb-5 wow fadeInRight text-white">
                        <div class="container">
                            <h4 class="s5 pt-4 d-none d-xl-block d-none d-lg-block"> คำอธิบายรายวิชาสำหรับบทเรียน
                                <br>เรื่อง การเขียนโปรแกรมด้วยภาษาซี สําหรับนักเรียนชั้นมัธยมศึกษาปีที่ 4</h4>
                            <h4 class="s5 pt-4 d-xl-none d-lg-none text-center">คำอธิบายรายวิชาสำหรับบทเรียน เรื่อง
                                การเขียนโปรแกรมด้วยภาษาซี สําหรับนักเรียนชั้นมัธยมศึกษาปีที่ 4</h4>
                            <hr>
                            <p class="text-justify" style="font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;
                                การเขียนโปรแกรมด้วยภาษาซี ในรายวิชา วิทยาการคำนวณ 1 รหัสวิชา ว 30142
                                ชั้นมัธยมศึกษาปีที่ 4 มีการจัดกิจกรรมเน้นผู้เรียนเป็นสำคัญ ส่งเสริมกระบวนการคิดวิเคราะห์
                                คิดสังเคราะห์ของผู้เรียนให้หลากหลายรูปแบบ และเป็นระบบขั้นตอน จัดกิจกรรมที่เปิดโอกาสให้
                                นักเรียนได้คิดแก้ปัญหา ซึ่งสอดคล้องกับหลักสูตรมัธยมศึกษาพุทธศักราช 2551 และการพัฒนา
                                ทักษะของผู้เรียนในยุคศตวรรษที่ 21
                            </p>
                            <a href="theme2.php?id=คำอธิบายรายวิชา" class="btn btn-primary btn-round"> คำอธิบายรายวิชาเพิ่มเติม <i
                                    class="material-icons">arrow_forward</i> </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    </div>

    <!-- Section 2 -->
    <div class="col-xl-12 pt-4 pb-4" style="background-color: #f2f6ff;">
        <div class="container">

            <div class="row">
              
                <div class="col-xl-12 pt-4">
                    <h3 class="section-title text-light">ข่าวประชาสัมพันธ์ <a href="all_news.php" style="float: right !important;font-size:14px;margin-top:-1px" class="btn btn-primary btn-sm">ข่าวทั้งหมด</a></h3>
                    <?php 
                        $sqlnews = "SELECT * FROM news ORDER BY n_id ASC LIMIT 10";
                        $querynews = mysqli_query($conn,$sqlnews);
                        while($fetchn = mysqli_fetch_array($querynews)){

                    ?>
                    <li style="padding: 10px 10px 2px 10px; border-bottom: 1px dashed #ccc;">
                        <a href="news_detail.php?id=<?php echo $fetchn[0] ?>" style="font-size: 16px;"><?php echo $fetchn['n_name'] ?> <label class="badge badge-rose" style="font-size: 14px;"><?php echo $fetchn['n_date'] ?>/<?php echo $fetchn['n_month'] ?>/<?php echo $fetchn['n_year'] ?></label></a>
                        
                    </li>

                    <?php } ?> 
                   
                </div>

            </div>

        </div>
    </div>



    <!-- Section 2 -->
    <div class="col-xl-12 pt-4 pb-4" style="background-color: #f2f6ff;">
        <div class="container">

            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 pt-5 pb-5">
                    <div class="container">
                        <h2 class="s5 pt-4 fw-700 d-xl-block d-none d-lg-block">บทเรียนเรื่อง การเขียนโปรแกรมด้วยภาษาซี
                            <br> สําหรับนักเรียนชั้นมัธยมศึกษาปีที่ 4</h2>
                        <h4 class="s5 pt-4 fw-700 d-xl-none d-lg-none">บทเรียนเรื่อง การเขียนโปรแกรมด้วยภาษาซี
                            สําหรับนักเรียนชั้นมัธยมศึกษาปีที่ 4</h4>
                        <?php 
                          $year = date("Y") ;
                          $all = $year+543;
                      ?>
                        <p class="text-justify" style="font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp; รายวิชา วิทยาการคำนวณ
                            1 รหัสวิชา ว 30142 ชั้นมัธยมศึกษาปีที่ 4
                            ภาคเรียนที่ 1 ปีการศึกษา <?php echo $all; ?> กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี
                            โรงเรียนยุพราชวิทยาลัย
                            เวลาเรียน 16 ชั่วโมง จำนวน 0.5 หน่วยกิต ครูผู้สอน นายธัญพิสิษฐ์ คุณยศยิ่ง ประกอบด้วย
                        </p>
                        <hr style="background-color:#ccc;height:1px">

                        <div class="row">
                            <div class="col-xl-3 col-md-3 col-6 text-center">
                                <h3 class="s1 count">9</h3>
                                <h5 class="s9">บทเรียน</h5>
                            </div>

                            <div class="col-xl-3 col-6 col-md-3 text-center">
                                <h3 class="s1 count">18</h3>
                                <h5 class="s9">แบบทดสอบ</h5>
                            </div>

                            <div class="col-xl-3 col-6 col-md-3 text-center">
                                <h3 class="s1 count">9</h3>
                                <h5 class="s9">แบบฝึกหัด</h5>
                            </div>

                            <?php
                            $sqldetail = "SELECT * FROM lesson ORDER BY l_id ASC";
                            $resultde = mysqli_query($conn,$sqldetail);
                            $numde = mysqli_num_rows($resultde);

                        ?>

                            <div class="col-xl-3 col-6 col-md-3 text-center">
                                <h3 class="s1 counter-count"><?php echo $numde; ?></h3>
                                <h5 class="s9">เนื้อหา</h5>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 pt-4 d-none d-lg-block d-none d-md-block" align="center">
                    <br>
                    <img src="assets/pic/pic.png" class="img-fluid " width="100%" alt="">
                </div>

            </div>

        </div>
    </div>

    <!-- Section 2 -->
    <div class="col-xl-12 pt-4 pb-4" style="background-color: #1f7a42;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 " align="center">
                    <br>
                    <img src="assets/pic/class.png" class="img-fluid " width="100%" alt="">
                </div>
                <div class="col-xl-8 col-md-8 pt-xl-5 pb-5">
                    <div class="container">
                        <h3 class="s5 pt-4 text-white text-center">การจัดการเรียนการสอนร่วมกับแพลตฟอร์ม G Suite<br><span
                                style="color:#ffd040;font-size:40px">Google for Education</span></h3>
                        <hr>
                        <div class="owl-carousel owl-two owl-theme">
                            <div class="item ">
                                <img src="assets/pic/logo1.png" class="img-fluid" width="100%"> <!-- Gmail -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo2.png" class="img-fluid" width="100%"> <!-- Drive -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo3.png" class="img-fluid" width="100%"> <!-- Calendar -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo4.png" class="img-fluid" width="100%"> <!-- Classroom -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo5.png" class="img-fluid" width="100%"> <!-- Site -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo6.png" class="img-fluid" width="100%"> <!-- Form -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo7.png" class="img-fluid" width="100%"> <!-- Doc -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo8.png" class="img-fluid" width="100%"> <!-- Sheet -->
                            </div>
                            <div class="item ">
                                <img src="assets/pic/logo9.png" class="img-fluid" width="100%"> <!-- Slide -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section 3 -->
    <div class="col-xl-12 parallax1 pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6" align="center">
                    <div class="container">
                        <img src="" class="img-fluid" width="80%"
                            style="border-radius: 5px;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);"
                            alt="">
                    </div>
                </div>
                <div class="col-xl-12 pb-5">
                    <div class="container" align="center">
                        <h1 class="s9" style="color: #dcce9a;font-size:50px">ผลงานนักเรียน</h1>
                        <hr>

                        <h6 class="s1" style="color: white;">
                            ตัวอย่างผลงานนักเรียนจากการเรียนรู้ในห้องเรียนได้รับรางวัลการรันตรีจากทั้งในและนอกสถานศึกษา
                        </h6>
                        <a href="theme2.php?id=ผลงานนักเรียน"
                            class="btn btn-warning btn-round">ดูผลงานนักเรียนเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="col-xl-12 pt-4 pb-4" style="background-color: #192635;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5 ">

                    <h2 class="s5 pt-4 text-white d-xl-block d-none d-lg-block"><span class="badge badge-warning"
                            style="font-size: 16px;">แหล่งเรียนรู้เพิ่มเติม</span><br>แหล่งเรียนรู้ออนไลน์เพิ่มเติม<br>จากบทเรียน
                    </h2>
                    <h3 class="s5 pt-4 text-white d-xl-none d-lg-none"><span class="badge badge-warning"
                            style="font-size: 16px;">แหล่งเรียนรู้เพิ่มเติม</span><br>แหล่งเรียนรู้ออนไลน์เพิ่มเติมจากบทเรียน
                    </h3>
                    <hr>
                    <p class="text-white">เพราะการเรียนรู้นั้นไม่สามารถหยุดได้
                        แหล่งเรียนรู้เพิ่มเติมสำหรับการเขียนโปรแกรมด้วยภาษา ซี
                        จากแหล่งเรียนรู้ออนไลน์ต่างๆมีทั้งภาษาไทยและภาษาต่างประเทศ ให้นักเรียนนั้นได้ศึกษา </p>
                </div>
                <div class="col-xl-8 col-md-7 pt-5 pb-5">
                    <div class="container">
                        <div class="owl-carousel owl-three owl-theme">
                            <div class="item ">
                                <img id="curve" src="assets/pic/programming.png" class="img-fluid" width="100%">
                                <h3 class="webname" style="color: white;" id="bold">Programming.in.th</h3>
                                <p style="color: white;" id="kanit">
                                    หลักสูตรที่จะทำให้คุณเขียนโปรแกรมภาษาซีเบื้องต้นเป็นอย่างรวดเร็วและสำหรับการฝึกเขียนโปรแกรมเพื่อแก้ไขโจทย์ปัญหา
                                </p>
                                <a href="https://programming.in.th/index.php" target="_blank"
                                    class="btn btn-rose btn-round mt-4 mb-4">รายละเอียด >> </a>
                            </div>
                            <div class="item ">
                                <img id="curve" src="assets/pic/cfaq.png" class="img-fluid" width="100%">
                                <h3 class="webname" style="color: white;" id="bold">C-faq</h3>
                                <p style="color: white;" id="kanit">คอลเล็กชันนี้เป็นลิขสิทธิ์ 1995-2005 โดย Steve
                                    Summit เนื้อหาจากหนังสือ "คำถามที่พบบ่อยเกี่ยวกับการเขียนโปรแกรม C: คำถามที่พบบ่อย"
                                </p>
                                <a href="www.c-faq.com" target="_blank"
                                    class="btn btn-rose btn-round mt-4 mb-4">รายละเอียด >> </a>
                            </div>
                            <div class="item ">
                                <img id="curve" src="assets/pic/wikipedia.png" class="img-fluid" width="100%">
                                <h3 class="webname" style="color: white;" id="bold">Wikipedia</h3>
                                <p style="color: white;" id="kanit">ภาษาซี (C) เป็นภาษาโปรแกรมสำหรับวัตถุประสงค์ทั่วไป
                                    เริ่มพัฒนาขึ้นโดยเดนนิส ริตชี (Dennis Ritchie) ที่เอทีแอนด์ทีเบลล์แล็บส์ (AT&T Bell
                                    Labs)</p>
                                <a href="https://th.wikipedia.org/wiki/%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B2%E0%B8%8B%E0%B8%B5"
                                    target="_blank" class="btn btn-rose btn-round mt-4 mb-4">รายละเอียด >> </a>
                            </div>
                            <div class="item ">
                                <img id="curve" src="assets/pic/cppreference.png" class="img-fluid" width="100%">
                                <h3 class="webname" style="color: white;" id="bold">CppPreference</h3>
                                <p style="color: white;" id="kanit">
                                    เว็บไซต์ที่เป็นแหล่งรวบรวมและเป็นแหล่งอ้างอิงคำสั่งการทำงานต่าง ๆ ของภาษา C++
                                    <br />&nbsp;</p>
                                <a href="http://www.cppreference.com/" target="_blank"
                                    class="btn btn-rose btn-round mt-4 mb-4">รายละเอียด >> </a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>




    <!--start footer-->
    <?php
            include_once 'component/footer.php';
        ?>
    <!--end footer-->

    <!--start linkjs-->
    <?php
            include_once 'component/jslink.php';
        ?>
    <!--end lnikjs-->

</body>

</html>