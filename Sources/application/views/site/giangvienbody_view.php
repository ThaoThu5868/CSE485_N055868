<!--Đường dẫn-->
<div class="container path"  >
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/trangchu/tchu" style="color:#df4c40"><strong>Trang chủ</strong></a></li>
    <li class="breadcrumb-item"><a><span>Giảng viên</span></a></li> 
    </ol>
</div
<!--Nội dung chính-->
<div class="me-body"> 
    <div class="container">
        <div class="row">
        <!--Nội dung giới thiệu-->
        <div class="col-sm-8" style="background-color:white;">
            <?php  foreach ($arrGV as $row) { ?>
             <div class="container">
                <div class="row introduce" style="margin-top:10px">
                    <div class="col-md-6 col-lg-5"><a href=""><img class="imgintroduce" src="<?php echo base_url();?>assets/img/giangvien/<?php echo $row['LINKGV'];?>" /></div></a>
                    <div class="col-md-6 col-lg-7">
                        <h3><?php echo $row['TIEUDEGV'];?></h3>
                        <p><?php echo $row['NOIDUNGGV'];?></p>
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
                