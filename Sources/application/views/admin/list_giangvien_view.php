<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="card" style="background:#df4c40;width:400px;float:right" >
            <form action="<?php echo base_url();?>index.php/admin/searchGV" method="post">
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
                        <h3 class="panel-title">Thông tin chi tiết GIẢNG VIÊN</h3>
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
                    <th>Họ Tên</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Nội dung</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrGV as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn " href = "<?php echo base_url() . 'index.php/admin/edit_gv/' . $row['MAGV'];?>"><em class="fa fa-pencil"></em></a>
                            <br>
                            <a class="btn " onclick="return confirm('Bạn có muốn xóa không');" href = "<?php echo base_url();?>index.php/admin/deletegv/<?php echo $row['MAGV'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAGV'];?></td>
                        <td><?php echo $row['TENGV'];?></td>
                        <td><?php echo $row['LINKGV'];?></td>
                        <td><?php echo $row['TIEUDEGV'];?></td>
                        <td><?php echo $row['TOMTATGV'];?></td>
                        <td><?php echo $row['NOIDUNGGV'];?></td>
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