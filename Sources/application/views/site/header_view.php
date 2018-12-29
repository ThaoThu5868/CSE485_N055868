<!-- Thanh điều hướng -->
<div class="me-header fixed-top">
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button me-nav ">
        <div class="container">
            <a class="navbar-brand" >
                <span>
                    <img src="<?php echo base_url();?>assets/img/tt.png" style="width:50px; height: auto;"><img src="<?php echo base_url();?>assets/img/makeup1.png" style="width:150px;height: auto">
                </span>
            </a>
            <!-- Toggle navigation -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <!-- Trang chủ -->
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/trangchu/tchu">TRANG CHỦ </a></li>
                    <!-- Giới thiệu -->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/gt/gioithieu">GIỚI THIỆU </a>
                    </li>
                    <!--dropdown-->
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">KHÓA HỌC </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">Học Online</a>
                            <a class="dropdown-item" role="presentation" href="#">Học Offline</a>
                        </div>
                    </li>
                    <!--Khuyến mãi-->
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/km/khuyenmai">KHUYẾN MẠI </a>
                    </li>
                    <!--Liên hệ-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">LIÊN HỆ
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url();?>index.php/thongtin/ttin">Thông Tin</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>index.php/thanhtoan/ttoan">Thanh Toán</a>
                        </div>
                    </li>
                </ul>
                <!--Đăng ký - Đăng nhập-->
                <p class="ml-auto navbar-text actions">
                    <a href="#" class="btn btn-light" role="button" id="btnDangNhap"><i class="fa fa-user"></i>Đăng Nhập</a>
                    <a class="btn btn-light" role="button" href="#" id="btnDangKy"><i class="fa fa-sign-in"></i>Đăng Ký</a>
                </p>
            </div>
        </div>
    </nav>  
</div>