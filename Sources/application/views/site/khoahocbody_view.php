<!--Nội dung chính-->
<div class="me-body"> 
    <div class="container">
        <div class="row">
            <!--Nội dung giới thiệu-->
            <div class="col-sm-8" style="background-color:white;">
                <div class="u-list-course" >
                    <h3>Nội dung khóa học</h3>
                    <div class="content">
                        <div class="panel-group" id="accordion" >
                            <div class="panel panel-default" style=" width: 100%;border: 1px solid black;border-collapse: collapse;border-color: #dddddd;-webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px; ">
                            <!-- phần 1-->
                            <div class="panel-heading" style=" background-color:#dddddd ">
                                <?php  
                                $stt = 1;
                                foreach ($arrKH as $row) { ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $stt;?>" class="" aria-expanded="true"><i class="fa fa-minus-square" aria-hidden="true"></i><?php echo $row['TIEUDEKH'];?></a>
                                            </h4>
                                        </div>
                                    </div>


                                    <!-- bài p1 -->

                                    <div id="collapse<?php echo $stt;$stt++;?>" class="panel-collapse collapse in " aria-expanded="true" >
                                        <div class="panel-body">
                                            <div class="col">
                                                <div class="container-fluid" style=" background-color: white">
                                                    <?php  foreach ($arrCTKH as $row1) { 
                                                        if($row1['MAKH'] == $row['MAKH']){
                                                        ?>
                                                        <div class="row" style="margin-bottom: 10px;" >

                                                            <div class="col-xs-5 col-md-8">
                                                                <div class="title">
                                                                    <a>
                                                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                                                        <?php echo $row1['TENBAI'];?></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4 col-md-2">
                                                                    <div class="link">
                                                                        &nbsp;
                                                                        <a href="#"><button id="button1">Học thử</button></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-3 col-md-2">
                                                                    <div class="time"> <p><?php echo $row1['THOIGIAN'];?></p></div>
                                                                </div>
                                                            </div>
                                                            <?php 
                                                        }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                    <!-- <thead>
                        <tr>
                            <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Loại</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Đơn Gía</th>
                            <th>Hình ảnh</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($arrKH as $row){?>
                            <tr class="w3-animate-left">
                            <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td><?php echo $row['MAKH'];?></td>
                            <td><?php echo $row['TENKH'];?></td>
                            <td><?php echo $row['LOAIKH'];?></td>
                            <td><?php echo $row['TIEUDE'];?></td>
                            <td><?php echo $row['NOIDUNG'];?></td>
                            <td><?php echo $row['DONGIA'];?></td>
                            <td><?php echo $row['LINKKH'];?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody> -->
            </div>
        </div>
        <?php 
    }
    ?>
</div>
</div>
</div>
</div>
</div>
</div>
        <!-- <div class="list123">
            <?php //echo $this->pagination->create_links();?>
        </div> -->

