<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết Học viên</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><em class="fa fa-cogs"></em></th>
                    <th>ID</th>
                    <th>Tên đăng nhập</th>
                    <th>Họ Tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Ngày đăng ký</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrHV as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                            <br>
                            
                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAHV'];?></td>
                        <td><?php echo $row['TENDNHV'];?></td>
                        <td><?php echo $row['TENHV'];?></td>
                        <td><?php echo $row['NGAYSINHHV'];?></td>
                        <td><?php echo $row['DIACHIHV'];?></td>
                        <td><?php echo $row['SDTHV'];?></td>
                        <td><?php echo $row['EMAILHV'];?></td>
                        <td><?php echo $row['PASSHV'];?></td>
                        <td><?php echo $row['trn_date'];?></td>
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