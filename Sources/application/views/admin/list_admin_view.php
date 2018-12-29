<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết ADMIN</h3>
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
                    <th>Tên đăng nhập</th>
                    <th>Họ Tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrAD as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href = "#"><em class="fa fa-pencil"></em></a>
                        </td>
                        <td><?php echo $row['MAAD'];?></td>
                        <td><?php echo $row['TENDNAD'];?></td>
                        <td><?php echo $row['TENAD'];?></td>
                        <td><?php echo $row['NGAYSINHAD'];?></td>
                        <td><?php echo $row['DIACHIAD'];?></td>
                        <td><?php echo $row['SDTAD'];?></td>
                        <td><?php echo $row['EMAILAD'];?></td>
                        <td><?php echo $row['PASSAD'];?></td>
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