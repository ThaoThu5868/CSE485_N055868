<?php
    include_once "head_view.php";
?>
    <!-- Nav -->
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include_once "header_view.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div>
        <div class="container-fluid" style="margin-top:80px">
            <div class="row">
                <!-- Menu -->
                <div class="col-md-4 col-lg-3 ">
                    <?php include_once "menu_view.php"; ?>
                </div>
                <!-- Nội dung Thay đổi -->
                <div class="col-md-8 col-lg-9">
                    <?php include "add_hoadon_view.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 me-footer-admin">
                    <?php include_once "footer_view.php"; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once "foot_view.php";
?>