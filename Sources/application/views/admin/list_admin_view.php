<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="card" style="background:#df4c40;width:400px;float:right" >
            <form action="<?php echo base_url();?>index.php/admin/searchAD" method="post">
                <div class="input-group" >
                    <input type="text" class="form-control" placeholder="Tìm kiếm" name="search">
                    <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    </div>
                </div>
            </form>
        </div>
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