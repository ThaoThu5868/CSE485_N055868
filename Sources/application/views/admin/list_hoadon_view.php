<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết HÓA ĐƠN</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                    <th>Mã</th>
                    <th>Ngày hóa đơn</th>
                    <th>Tên Admin</th>
                    <th>Tên Học viên</th>
                    <th>ID Khóa học</th>
                    <th>Giá</th>
                    <th>Mã Khuyến mãi</th>
                    <th>Tổng tiền</th>
                    <th>Check</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrHD as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href = "#"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-default" onclick="return confirm('Bạn có muốn xóa không');" href = "<?php echo base_url();?>index.php/admin/deletehd/<?php echo $row['MAHD'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAHD'];?></td>
                        <td><?php echo $row['NGAYHD'];?></td>
                        <td><?php echo $row['TENAD'];?></td>
                        <td><?php echo $row['TENHV'];?></td>
                        <td><?php echo $row['MAKH'];?></td>
                        <td><?php echo $row['GIAKH'];?></td>
                        <td><?php echo $row['MAKM'];?></td>
                        <td><?php echo $row['TONGTIEN'];?></td>
                        <td><?php echo $row['CHECKTT'];?></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="pagination justify-content-center">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>