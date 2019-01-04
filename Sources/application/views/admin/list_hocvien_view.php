<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="card" style="background:#df4c40;width:400px;float:right" >
            <form action="<?php echo base_url();?>index.php/admin/searchHV" method="post">
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
                        <h3 class="panel-title">Thông tin chi tiết HỌC VIÊN</h3>
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
                    <th>Họ Tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Ngày đăng ký</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrHV as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn "  href = "<?php echo base_url() . 'index.php/admin/edit_hv/' . $row['MAHV'];?>"><em class="fa fa-pencil"></em></a>
                            <br>
                            <a class="btn " onclick="return confirm('Bạn có muốn xóa không');" href = "<?php echo base_url();?>index.php/admin/deletehv/<?php echo $row['MAHV'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAHV'];?></td>
                        <td><?php echo $row['TENHV'];?></td>
                        <td><?php echo $row['NGAYSINHHV'];?></td>
                        <td><?php echo $row['DIACHIHV'];?></td>
                        <td><?php echo $row['SDTHV'];?></td>
                        <td><?php echo $row['EMAILHV'];?></td>
                        <td><?php echo $row['trn_date'];?></td>
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