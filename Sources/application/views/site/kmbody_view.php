<!--Nội dung chính-->
<div class="me-body"> 
    <div class="container">
        <div class="row">
            <!--Nội dung giới thiệu-->
            <div class="col-sm-8" style="background-color:white;">
                <?php  foreach ($arrKM as $row) { ?>
                   <div class="container">
                    <div class="row introduce" style="margin-top:10px">
                        <div class="col-md-6 col-lg-5"><a href=""><img class="img-fluid w3-hover-opacity w3-animate-zoom" src="<?php echo base_url();?>assets/img/khuyenmai/<?php echo $row['LINKKM'];?>.jpg" /></div></a>
                        <div class="col-md-6 col-lg-7">
                            <a href=""><h3><?php echo $row['TIEUDEKM'];?></h3></a>
                            <p><?php echo $row['TOMTATKM'];?></p>
                        </div>
                    </div>
                </div>
                <?php 
            }
            ?>
        </div>
        