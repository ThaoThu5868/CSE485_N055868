<div class="container path"  >
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/trangchu/tchu" style="color:#df4c40"><strong>Trang chủ</strong></a></li>
    <li class="breadcrumb-item"><a><span>Khuyến mại</span></a></li>
    </ol>
</div
<!--Nội dung chính-->
<div class="me-body"> 
    <div class="container">
        <div class="row">
            <!--Nội dung giới thiệu-->
            <div class="col-sm-8" style="background-color:white;">
                <?php  foreach ($arrKM as $row) { ?>
                <div class="container">
                    <div class="row introduce" style="margin-top:10px">
                        <div class="col-md-6 col-lg-5"><img class="img-fluid w3-hover-opacity w3-animate-zoom" src="<?php echo base_url();?>assets/img/khuyenmai/<?php echo $row['LINKKM'];?>" /></div>
                        <div class="col-md-6 col-lg-7">
                            <h3><?php echo $row['TIEUDEKM'];?></h3>
                            <p><?php echo $row['TOMTATKM'];?></p>
                        </div>
                    </div>
                </div>
                <?php 
            }
            ?>
             <div class="pagination justify-content-center">
                <?php echo $this->pagination->create_links();?>
            </div>
        </div>
        