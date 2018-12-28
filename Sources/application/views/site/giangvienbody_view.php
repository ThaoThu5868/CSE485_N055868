<!--Nội dung chính-->
<div class="me-body"> 
    <div class="container">
        <div class="row">
        <!--Nội dung giới thiệu-->
        <div class="col-sm-8" style="background-color:white;">
            <?php  foreach ($arrGV as $row) { ?>
             <div class="container">
                <div class="row introduce" style="margin-top:10px">
                    <div class="col-md-6 col-lg-5"><a href=""><img class="imgintroduce" src="<?php echo base_url();?>assets/img/giangvien/<?php echo $row['LINKGV'];?>.jpg" /></div></a>
                    <div class="col-md-6 col-lg-7">
                        <h3><?php echo $row['TIEUDEGV'];?></h3>
                        <p><?php echo $row['NOIDUNGGV'];?></p>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
                