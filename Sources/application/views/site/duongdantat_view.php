<!--Đường dẫn tắt-->
<div class="col-sm-4" style="background-color:white;">
            <body>
                <!--Tìm kiếm-->
                <div class="card">
                    <div class="card-header card0">
                        <h5 class="mb-0">Tìm kiếm</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nhập vào đây!">
                                    <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
                <!--Khoá học-->
                <div class="card">
                    <div class="card-header card1">
                        <h5 class="mb-0">Khoá Học</h5>
                    </div>
                    <div class="card-body">
                        <?php  foreach ($arr3KH as $row) { ?>
                                                    
                            <div class="media "><a href="<?php echo base_url();?>index.php/gtkhoahoc/khoc"><img class="img-fluid w3-hover-opacity w3-animate-zoom imgmini" src="<?php echo base_url();?>assets/img/khoahoc/<?php echo $row['LINKKH'];?>.jpg" class="mr-3" /></a>
                                <div class="media-body">
                                    <a href="#"><strong><?php echo $row['TIEUDEKH'];?></strong></a>
                                </div>
                            </div>
                          <?php 
                            }
                            ?>
                    </div>
                </div>
                <!--Khuyến mãi-->
                <div class="card">
                    <div class="card-header card2">
                        <h5 class="mb-0">Khuyến Mãi</h5>
                    </div>
                   <div class="card-body">
                        <?php  foreach ($arr3KM as $row) { ?>
                                                    
                            <div class="media "><a href="<?php echo base_url();?>index.php/km/khuyenmai"><img class="img-fluid w3-hover-opacity w3-animate-zoom imgmini" src="<?php echo base_url();?>assets/img/khuyenmai/<?php echo $row['LINKKM'];?>.jpg" class="mr-3" /></a>
                                <div class="media-body">
                                    <a href="#"><strong><?php echo $row['TIEUDEKM'];?></strong></a>
                                </div>
                            </div>
                          <?php 
                            }
                            ?>
                    </div>
                </div>
            </body> 
        </div>
        </div>
    </div> 
</div>

