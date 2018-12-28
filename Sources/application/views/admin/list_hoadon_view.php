<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết khóa học</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                    <th>ID</th>
                    <th>Ngày hóa đơn</th>
                    <!-- <th>Tên Admin</th>
                    <th>Tên Học viên</th> -->
                    <th>ID Học Viên</th>
                    <th>ID admin</th>
                    <!-- <th>Đơn giá</th>
                    <th>ID Khuyến mãi</th>
                    <th>Tổng tiền</th> -->
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrHD as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAHD'];?></td>
                        <td><?php echo $row['NGAYHD'];?></td>
                        <!-- <td><?php //echo $row['TENAD'];?></td>
                        <td><?php //echo $row['TENHV'];?></td> -->
                        <td><?php echo $row['MAHV'];?></td>
                        <td><?php echo $row['MAAD'];?></td>
                        <!-- <td><?php //echo $row['Soluong'];?></td>
                        <td><?php// echo $row['Soluong'];?></td>
                        <td><?php //echo $row['Soluong'];?></td> -->
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="list123">
            <?php //echo $this->pagination->create_links();?>
        </div>
    </div>
</div>