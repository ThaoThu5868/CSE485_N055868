<!--Nội dung chính-->
<div class="me-body"> 
    <div class="container">
        <div class="row">
            <!--Nội dung giới thiệu-->
            <div class="col-sm-8" style="background-color:white;">
                <?php  foreach ($arrKH as $row) { ?>
                   <div class="container">
                    <div class="row introduce" style="margin-top:10px">
                        <div class="col-md-6 col-lg-5"><a href="<?php echo base_url();?>index.php/gtkhoahoc/khoc"><img class="img-fluid w3-hover-opacity w3-animate-zoom" src="<?php echo base_url();?>assets/img/khoahoc/<?php echo $row['LINKKH'];?>.jpg"  /></div></a>
                        <div class="col-md-6 col-lg-7">
                            <a href="<?php echo base_url();?>index.php/khoahoc/kh"><h3><?php echo $row['TIEUDEKH'];?></h3></a>
                            <p><?php echo $row['TOMTATKH'];?></p>
                        </div>
                    </div>
                </div>
                <?php 
            }
            ?>
        </div>
        