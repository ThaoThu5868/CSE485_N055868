<body>
    <div class="features-boxed">
        <div class="container">
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-user-circle-o icon"></i>
                        <h3 class="name">Admin</h3>
                        <p class="description">Tổng số: <?php echo $countAD;?></p>
                        <a href="<?php echo base_url();?>index.php/admin/chitietadmin" class="learn-more">Chi tiết »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-users icon"></i>
                        <h3 class="name">Học Viên</h3>
                        <p class="description">Tổng số: <?php echo $countHV;?></p>
                        <a href="<?php echo base_url();?>index.php/admin/chitiethv" class="learn-more">Chi tiết »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-user icon"></i>
                        <h3 class="name">Giảng Viên</h3>
                        <p class="description">Tổng số: <?php echo $countGV;?></p>
                        <a href="<?php echo base_url();?>index.php/admin/chitietgv" class="learn-more">Chi tiết »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-file-text icon"></i>
                        <h3 class="name">Hóa Đơn</h3>
                        <p class="description">Tổng số: <?php echo $countHD;?></p>
                        <a href="<?php echo base_url();?>index.php/admin/chitiethoadon" class="learn-more">Chi tiết »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-book icon"></i>
                        <h3 class="name">Khóa Học</h3>
                        <p class="description">Tổng số: <?php echo $countKH;?></p>
                        <a href="<?php echo base_url();?>index.php/admin/chitietkh" class="learn-more">Chi tiết »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-bell icon"></i>
                        <h3 class="name">Khuyến mãi</h3>
                        <p class="description">Tổng số: <?php echo $countKM;?></p>
                        <a href="<?php echo base_url();?>index.php/admin/chitietkm" class="learn-more">Chi tiết »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>