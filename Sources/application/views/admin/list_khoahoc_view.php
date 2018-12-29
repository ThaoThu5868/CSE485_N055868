<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Thông tin chi tiết KHÓA HỌC</h3>
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
                    <th>Tên</th>
                    <th>Loại</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Giá </th>
                    <th>Người tạo</th>
                    <th>Bài học</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arrKH as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href = "#"><em class="fa fa-pencil"></em></a>
                            <a class="btn btn-default" onclick="return confirm('Bạn có muốn xóa không');" href = "<?php echo base_url();?>index.php/admin/deletekh/<?php echo $row['MAKH'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['MAKH'];?></td>
                        <td><?php echo $row['TENKH'];?></td>
                        <td><?php echo $row['LOAIKH'];?></td>
                        <td><?php echo $row['LINKKH'];?></td>
                        <td><?php echo $row['TIEUDEKH'];?></td>
                        <td><?php echo $row['TOMTATKH'];?></td>
                        <td><?php echo $row['GIAKH'];?></td>
                        <td><?php echo $row['TENAD'];?></td>
                        <td align="center">
                            <a href="<?php echo base_url();?>index.php/admin/chitietbh/<?php echo $row['MAKH'];?>" class="learn-more">Chi tiết »</a>
                        </td>
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