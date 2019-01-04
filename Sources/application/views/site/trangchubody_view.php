<!--Nội dung chính-->
<div class="me-body" style="background-color:white">
    <!-- Note -->
    <div class="row rownote" style="background-color:#fefbbf">
        <div class="col" style="margin-top:40px;">
            <h4 style="text-align: center">LÀ CON GÁI PHẢI XINH!</h4>
            <div class="container-1">
                <p>Ở thế hệ 8x trở về trước hai chữ “trang điểm” thật sự không mấy quen thuộc. Thường người ta hay vu vơ tự hỏi “sao bây giờ bọn trẻ hay thích trang điểm nhỉ?”. Dần dần cho đến hiện tại hai chữ “trang điểm” được trải rộng ra cho hầu hết tất cả mọi lứa tuổi già, trung niên, thanh niên hay vị thành niên. Thậm chí không chỉ phụ nữ mà cả nam giới cũng “trang điểm”.
                Vậy thì tại sao phải cần trang điểm? Và nhất là phái đẹp ? Phải chăng vì trang điểm sẽ giúp phụ nữ đẹp hơn và tự tin hơn khi sống trong một xã hội ngày càng hiện đại và tiến bộ này. Ngoài tính năng “đẹp” và “tự tin”, trang điểm còn có những ưu điểm và công dụng khác nữa đấy.</p>
            </div>
        </div>
    </div>
    <!--Điểm qua 1 số ND chính-->
    <!--Khóa học-->
    <div class="projects-horizontal">
        <div class="container" >
            <div class="intro">
                <h2 class="text-center" style="margin-top:50px">KHÓA HỌC</h2>
                <p class="text-center">Đến với T&T MakeUp các bạn sẽ được tân hưởng với những khoá học tuyệt vời nhất từ các chuyên gia hàng đầu trên thế giới!</p>
            </div>
            <div class="row projects" >
                 <?php  foreach ($arrKH as $row) { ?>
                <div class="col-sm-6 item">
                    <div class="row row1">
                        <div class="col-md-12 col-lg-5"><a href="<?php echo base_url();?>index.php/khoahoc/kh"><img class="img-fluid w3-hover-opacity w3-animate-zoom" src="<?php echo base_url();?>assets/img/khoahoc/<?php echo $row['LINKKH'];?>"  /></a></div>
                        <div class="col">
                            <h3 class="name"><?php echo $row['TIEUDEKH'];?></h3>
                            <p class="description"><?php echo $row['TOMTATKH'];?></p>
                            <a href="<?php echo base_url();?>index.php/khoahoc/kh" class="action" style="float: right;"><i class="fa fa-arrow-circle-right" style="font-size: 30px;"></i></a>
                        </div>
                    </div>
                </div>
                 <?php 
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container xemthem" style="margin-top:30px;">
       <a href="<?php echo base_url();?>index.php/khoahoc/kh"><button class="btn btn-primary" type="button">XEM THÊM</button></a>
    </div>
    <!--Khuyến mại-->
    <div class="article-list" style="margin-top:50px">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">KHUYẾN MẠI</h2>
                <p class="text-center">Giảm giá cực sâu - Ưu đãi cực Shock!!!<br>
                "Hãy đến ngay với T&T để được học hỏi những khoá học tuyệt vời nhất với giá rẻ đến không ngờ!"</p>
            </div>
            <div class="row articles" style="margin-top:40px">
                <?php  foreach ($arr3KM as $row) { ?>
                    <div class="col-sm-6 col-md-4 item">
                        <div class="item1">
                             <a href="<?php echo base_url();?>index.php/km/khuyenmai"><img class="img-fluid w3-hover-opacity w3-animate-zoom" src="<?php echo base_url();?>assets/img/khuyenmai/<?php echo $row['LINKKM'];?>"  /></a>
                            <h3 class="name"><?php echo $row['TIEUDEKM'];?></h3>
                            <p class="description"><?php echo $row['TOMTATKM'];?></p>
                        </div>
                    </div>
                <?php 
                }
                ?>
            </div>

        </div>
    </div>
    <div class="container xemthem">
        <a href="<?php echo base_url();?>index.php/km/khuyenmai"><button class="btn btn-primary" type="button">XEM THÊM</button></a>
    </div>
<!--Giới thiệu-->
<div class="team-boxed" style="margin-top:50px;background-color: white;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">ĐỘI NGŨ GIẢNG VIÊN</h2>
            <p class="text-center">Với một đội ngũ giảng viên đầy kinh nghiệm và đam mê, chúng tôi sẽ biến ước mơ của bạn thành hiện thực!</p>
        </div>
        <div class="row people" style="margin-top:40px">
            <?php  foreach ($arrGV as $row) { ?>
            <!-- <!-- <div class="col-md-6 col-lg-3 item" >
                 <a href="<?php echo base_url();?>index.php/giangvien/gv"><img class="w3-hover-opacity rounded-circle  w3-animate-zoom  "src="<?php echo base_url();?>assets/img/giangvien/<?php echo $row['LINKGV'];?>.jpg" /></a>
                <h3 class="name"><?php echo $row['TENGV'];?></h3>
                <p class="title"><?php echo $row['TIEUDEGV'];?></p>
                <p class="description"><?php echo $row['TOMTATGV'];?></p>
            </div> --> 

                <div class="col-md-6 col-lg-4 item ">
                    <div class="box" style=" background-color:#fbdada;" ><img class="w3-hover-opacity rounded-circle  w3-animate-zoom  "src="<?php echo base_url();?>assets/img/giangvien/<?php echo $row['LINKGV'];?>"/>
                        <h3 class="name"><?php echo $row['TENGV'];?></h3>
                        <p class="title"><?php echo $row['TIEUDEGV'];?></p>
                        <p class="description"><?php echo $row['TOMTATGV'];?></p> 
                    </div>
                </div>
            <?php 
            }
            ?>
        </div>
    </div>
</div>
<div class="container xemthem" style="margin-bottom:100px">
    <a href="<?php echo base_url();?>index.php/giangvien/gv"><button class="btn btn-primary" type="button" >XEM THÊM</button></a>
</div>
</div>